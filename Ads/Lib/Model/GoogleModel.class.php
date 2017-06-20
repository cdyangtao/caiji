<?php
function object_to_array($obj)
{
    $_arr= is_object($obj) ? get_object_vars($obj) : $obj;
    foreach($_arr as $key=> $val)
    {
        $val= (is_array($val) || is_object($val)) ?       object_to_array($val) : $val;
        $arr[$key] = $val;
    }
    return $arr;
}
/**
 * google adwords api
 *
 * */
class GoogleModel extends Model {
    public $user;
    public function __construct(){
        require_once getcwd().'/GoogleAPI/init.php';
        
        //$customer_id='988-900-9221';
        if(empty($_SESSION['customer_id'])){
            U('/account/index','',false,true);
        }else{
            $customer_id=$_SESSION['customer_id'];
            $user       = new AdWordsUser();
            $user->SetClientCustomerId($customer_id);
            $this->user=$user;
        }
        //die('123');
    }
    /**
     * Runs the example.
     */
    function GetCampaigns() {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);

        // Create selector.
        $selector = new Selector();
        $selector->fields = array(
            'AdServingOptimizationStatus',
            'AdvertisingChannelSubType',
            'AdvertisingChannelType',
            'Amount',
            'BaseCampaignId',
            'BidCeiling',
            'BidType',
            'BiddingStrategyId',
            'BiddingStrategyName',
            'BiddingStrategyType',
            'BudgetId',
            'BudgetName',
            'BudgetReferenceCount',
            'BudgetStatus',
            'CampaignTrialType',
            'DeliveryMethod',
            'Eligible',
            'EndDate',
            'EnhancedCpcEnabled',
            'FrequencyCapMaxImpressions',
            //'FrequencyCap',
            'Id',
            'IsBudgetExplicitlyShared',
            'Labels',
            'Level',
            'Name',
            'PricingMode',
            'RejectionReasons',
            'SelectiveOptimization',
            'ServingStatus',
            'Settings',
            'StartDate',
            'Status',
            'TargetContentNetwork',
            'TargetCpa',
            'TargetCpaMaxCpcBidCeiling',
            'TargetCpaMaxCpcBidFloor',
            'TargetGoogleSearch',
            'TargetPartnerSearchNetwork',
            'TargetRoas',
            'TargetRoasBidCeiling',
            'TargetRoasBidFloor',
            'TargetSearchNetwork',
            'TargetSpendBidCeiling',
            'TargetSpendSpendTarget',
            'TimeUnit',
            'TrackingUrlTemplate',
            'UrlCustomParameters',
            'VanityPharmaDisplayUrlMode',
            'VanityPharmaText',
            //'LocalClicks',

        );
        //$selector->fields = [];
        //$selector->ordering[] = new OrderBy('Id', 'ASCENDING');
        $selector->ordering[] = new OrderBy('Id', 'DESCENDING');

        // Create paging controls.
        $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
        //$selector->paging = new Paging(0, 30);

        do {
            // Make the get request.
            $page = $campaignService->get($selector);

            // Display results.
            $campaigns=[];
            if (isset($page->entries)) {
                foreach ($page->entries as $campaign) {
                    $campaigns[]=object_to_array($campaign);
                }
            } else {
                //print "No campaigns were found.\n";
            }

            // Advance the paging index.
            $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
        } while ($page->totalNumEntries > $selector->paging->startIndex);
        return $campaigns;
    }

    /**
     * 获取广告组
     * @param string $campaignId the id of the parent campaign
     */
    function GetAdGroups($campaignId=0) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
    
        // Create selector.
        $selector = new Selector();
        $selector->fields = array(
            'BaseAdGroupId',
            'BaseCampaignId',
            'BidType',
            'BiddingStrategyId',
            'BiddingStrategyName',
            'BiddingStrategySource',
            'BiddingStrategyType',
            'CampaignId',
            'CampaignName',
            'ContentBidCriterionTypeGroup',
            'CpcBid',
            'CpmBid',
            'EnhancedCpcEnabled',
            'Id',
            'Labels',
            'Name',
            'Settings',
            'Status',
            'TargetCpa',
            'TargetCpaBid',
            'TargetCpaBidSource',
            'TrackingUrlTemplate',
            'UrlCustomParameters',
        );
        $selector->ordering[] = new OrderBy('CampaignId', 'ASCENDING');
    
        // Create predicates.
        if(!empty($campaignId)){
            $selector->predicates[] =
            new Predicate('CampaignId', 'EQUALS', $campaignId);
        }else{
            //设置去除所属campaign是未删除的
            $selector->predicates[] =
            new Predicate('CampaignId', 'EQUALS', $campaignId);
        }
    
        

        // Create paging controls.
        $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
    
        do {
            // Make the get request.
            $page = $adGroupService->get($selector);
            $groups=[];
            // Display results.
            if (isset($page->entries)) {
                foreach ($page->entries as $adGroup) {
                    $groups[]=object_to_array($adGroup);
                    //printf("Ad group with name '%s' and ID '%s' was found.\n",$adGroup->name, $adGroup->id);
                    //echo '<hr/>';
                }
            }
             
            // Advance the paging index.
            $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
        } while ($page->totalNumEntries > $selector->paging->startIndex);
        return $groups;
    }
    
    /**
     * 获取广告组详情
     * @param string $campaignId the id of the parent campaign
     */
    function GetAdGroupDetail($adGroupId) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
    
        // Create selector.
        $selector = new Selector();
        $selector->fields = array(
            'BaseAdGroupId',
            'BaseCampaignId',
            'BidType',
            'BiddingStrategyId',
            'BiddingStrategyName',
            'BiddingStrategySource',
            'BiddingStrategyType',
            'CampaignId',
            'CampaignName',
            'ContentBidCriterionTypeGroup',
            'CpcBid',
            'CpmBid',
            'EnhancedCpcEnabled',
            'Id',
            'Labels',
            'Name',
            'Settings',
            'Status',
            'TargetCpa',
            'TargetCpaBid',
            'TargetCpaBidSource',
            'TrackingUrlTemplate',
            'UrlCustomParameters',
        );
        //$selector->ordering[] = new OrderBy('CampaignId', 'ASCENDING');
    
        // Create predicates.
        $selector->predicates[] =
            new Predicate('Id', 'EQUALS', $adGroupId);
    
        // Create paging controls.
        //$selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
        $page = $adGroupService->get($selector);
        //$adGroup_obj=$page->entries
        return object_to_array($page->entries[0]);
        
    }
    
    /**
     * 获取广告
     * @param string $adGroupId the id of the parent ad group
     */
    function GetAdGroupAds($adGroupId) {
        $user=$this->user;
        
        // Get the service, which loads the required classes.
        $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);
    
        // Create selector.
        $selector = new Selector();
        $selector->fields = array(
            'AdGroupId',
            'AdType',
            'CreativeFinalUrls',
            'Description',
            'Description1',
            'DisplayUrl',
            'Headline',
            'Labels',
            'Path1',
            'Path2',
            'Status',
            'Url',
            'Id', 
            'BaseCampaignId',           
        );
        $selector->ordering[] = new OrderBy('Headline', 'ASCENDING');
    
        // Create predicates.
        $selector->predicates[] = new Predicate('AdGroupId', 'EQUALS', $adGroupId);
        //$selector->predicates[] = new Predicate('AdType', 'IN', array('TEXT_AD'));
        // By default disabled ads aren't returned by the selector. To return them
        // include the DISABLED status in a predicate.
        //$selector->predicates[] = new Predicate('Status', 'IN', array('ENABLED', 'PAUSED', 'DISABLED'));
        
        // Create paging controls.
        $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
        $data=[];
        do {
            // Make the get request.
            $page = $adGroupAdService->get($selector);
    
            // Display results.
            if (isset($page->entries)) {
                foreach ($page->entries as $adGroupAd) {
                    $data[]=object_to_array($adGroupAd);
                }
            }
    
            // Advance the paging index.
            $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
        } while ($page->totalNumEntries > $selector->paging->startIndex);
        return $data;
    }
    
    /**
     * 获取关键字
     * @param string $adGroupId the id of the parent ad group
     */
    function GetKeywords($adGroupId) {
        $user=$this->user;
        
        // Get the service, which loads the required classes.
        $adGroupCriterionService =
        $user->GetService('AdGroupCriterionService', ADWORDS_VERSION);
        
        // Create selector.
        $selector = new Selector();
        $selector->fields = array('Id', 'KeywordText','Status','Labels','CpcBid');
        $selector->ordering[] = new OrderBy('KeywordText', 'ASCENDING');
        
        // Create predicates.
        $selector->predicates[] = new Predicate('AdGroupId', 'IN', array($adGroupId));
        $selector->predicates[] =
          new Predicate('CriteriaType', 'IN', array('KEYWORD'));
        
        // Create paging controls.
        $selector->paging = new Paging(0, AdWordsConstants::RECOMMENDED_PAGE_SIZE);
        $data=[];
        do {
            // Make the get request.
            $page = $adGroupCriterionService->get($selector);
            
            // Display results.
            if (isset($page->entries)) {
                foreach ($page->entries as $adGroupCriterion) {
                    $data[]=object_to_array($adGroupCriterion);
                }
            }
            // Advance the paging index.
            $selector->paging->startIndex += AdWordsConstants::RECOMMENDED_PAGE_SIZE;
        } while ($page->totalNumEntries > $selector->paging->startIndex);
        return $data;
    }
    
    /**
    *   添加广告系列
    */
    function AddCampaigns($budget_money=100,$campaignName='') {
        $user=$this->user;

        // Get the BudgetService, which loads the required classes.
        $budgetService = $user->GetService('BudgetService', ADWORDS_VERSION);

        // Create the shared budget (required).
        $budget = new Budget();
        $budget->name = 'Budget #' . uniqid();
        $budget->amount = new Money($budget_money*1000000); 
        $budget->deliveryMethod = 'STANDARD';

        // Create operation.
        $operation = new BudgetOperation();
        $operation->operand = $budget;
        $operation->operator = 'ADD';

        // Make the mutate request.
        $result = $budgetService->mutate([$operation]);
        $budget = $result->value[0];

        // Get the CampaignService, which loads the required classes.
        $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);      
      
        // Create campaign.
        $campaign = new Campaign();
        //$campaign->name = 'Interplanetary Cruise #' . uniqid();
        $campaign->name = $campaignName;
        $campaign->advertisingChannelType = 'SEARCH';

        // Set shared budget (required).
        $campaign->budget = new Budget();
        $campaign->budget->budgetId = $budget->budgetId;

        // Set bidding strategy (required).
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';

        // You can optionally provide a bidding scheme in place of the type.
        $biddingScheme = new ManualCpcBiddingScheme();
        $biddingScheme->enhancedCpcEnabled = false;
        $biddingStrategyConfiguration->biddingScheme = $biddingScheme;

        $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

        // Set network targeting (optional).
        $networkSetting = new NetworkSetting();
        $networkSetting->targetGoogleSearch = true;
        $networkSetting->targetSearchNetwork = true;
        $networkSetting->targetContentNetwork = true;
        $campaign->networkSetting = $networkSetting;

        // Set additional settings (optional).
        $campaign->status = 'PAUSED';
        $campaign->status = 'ELIGIBLE';
        $campaign->startDate = date('Ymd', strtotime('+1 day'));
        $campaign->endDate = date('Ymd', strtotime('+1 month'));
        $campaign->adServingOptimizationStatus = 'ROTATE';

        // Set frequency cap (optional).
        $frequencyCap = new FrequencyCap();
        $frequencyCap->impressions = 5;
        $frequencyCap->timeUnit = 'DAY';
        $frequencyCap->level = 'ADGROUP';
        $campaign->frequencyCap = $frequencyCap;

        // Set advanced location targeting settings (optional).
        $geoTargetTypeSetting = new GeoTargetTypeSetting();
        $geoTargetTypeSetting->positiveGeoTargetType = 'DONT_CARE';
        $geoTargetTypeSetting->negativeGeoTargetType = 'DONT_CARE';
        $campaign->settings[] = $geoTargetTypeSetting;

        // Create operation.
        $operation = new CampaignOperation();
        $operation->operand = $campaign;
        $operation->operator = 'ADD';
      

        // Make the mutate request.
        $result = $campaignService->mutate([$operation]);

        return $result;
        // Display results.
        /* foreach ($result->value as $campaign) {
            printf("Campaign with name '%s' and ID '%s' was added.\n", $campaign->name,
            $campaign->id);
        } */
    }
    
    /**
     * 添加广告组
     * @param string $campaignId the ID of the campaign to add the ad group to
     */
    function AddAdGroups($campaignId,$name,$cpc_amount) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
        
        // Create ad group.
        $adGroup = new AdGroup();
        $adGroup->campaignId = $campaignId;
        $adGroup->name = $name;

        // Set bids (required).
        $bid = new CpcBid();
        $bid->bid =  new Money($cpc_amount*1000000);
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->bids[] = $bid;
        $adGroup->biddingStrategyConfiguration = $biddingStrategyConfiguration;

        // Set additional settings (optional).
        $adGroup->status = 'ENABLED';

        // Targeting restriction settings. Depending on the criterionTypeGroup
        // value, most TargetingSettingDetail only affect Display campaigns.
        // However, the USER_INTEREST_AND_LIST value works for RLSA campaigns -
        // Search campaigns targeting using a remarketing list.
        $targetingSetting = new TargetingSetting();
        // Restricting to serve ads that match your ad group placements.
        // This is equivalent to choosing "Target and bid" in the UI.
        $targetingSetting->details[] =
        new TargetingSettingDetail('PLACEMENT', false);
        // Using your ad group verticals only for bidding. This is equivalent
        // to choosing "Bid only" in the UI.
        $targetingSetting->details[] =
        new TargetingSettingDetail('VERTICAL', true);
        $adGroup->settings[] = $targetingSetting;

        // Create operation.
        $operation = new AdGroupOperation();
        $operation->operand = $adGroup;
        $operation->operator = 'ADD';
        
    
        // Make the mutate request.
        $result = $adGroupService->mutate([$operation]);
        return $result;
       
    }
    
    /**
     * 添加广告
     * @param string $adGroupId the ID of the ad group to add the ads to
     */
    function AddExpandedTextAds($adGroupId,$headlinePart1,$headlinePart2,$description,$finalUrls,$path1,$path2) {
        $user   = $this->user;
        
        // Get the service, which loads the required classes.
        $adGroupAdService = $user->GetService('AdGroupAdService', ADWORDS_VERSION);
    
        // Create an expanded text ad.
        $expandedTextAd = new ExpandedTextAd();
        $expandedTextAd->headlinePart1 = $headlinePart1;
        $expandedTextAd->headlinePart2 = $headlinePart2;
        $expandedTextAd->description = $description;
        $expandedTextAd->finalUrls = array($finalUrls);
        $expandedTextAd->path1 = $path1;
        $expandedTextAd->path2 = $path2;
    
        // Create ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->adGroupId = $adGroupId;
        $adGroupAd->ad = $expandedTextAd;
    
        // Set additional settings (optional).
        $adGroupAd->status = 'PAUSED';
    
        // Create operation.
        $operation = new AdGroupAdOperation();
        $operation->operand = $adGroupAd;
        $operation->operator = 'ADD';
    
        $operations = array($operation);
    
        // Make the mutate request.
        $result = $adGroupAdService->mutate($operations);
        return $result;
        
    }

    /**
     * Runs the example.
     * @param string $campaignId the ID of the campaign to update
     */
    function UpdateCampaign($update,$campaignId) {
        $user=$this->user;
        
        // Get the service, which loads the required classes.
        $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);
    
        // Create campaign using an existing ID.
        $campaign = new Campaign();
        $campaign->id = $campaignId;
        /* $campaign->status = 'ENABLED';
        $campaign->name = 'xxxxxxxxza';
        $campaign->servingStatus = 'PENDING'; */
        
        // 创建一个预算实例用于修改
        $budget =new Budget();
        foreach($update as $field=>$value){            
            switch($field){
                case 'budget_id':
                    $budget->id=$value;
                    break;
                case 'budget_amount':
                    $budget->amount=new Money($value*1000000);
                    break;
                default:
                    $campaign->$field=$value;
                    break;
            }
        }
        if(isset($update['budget_id'])){
            $campaign->budget=$budget;
        }
        
        // Create operation.
        $operation = new CampaignOperation();
        $operation->operand = $campaign;
        $operation->operator = 'SET';
    
        $operations = array($operation);
    
        // Make the mutate request.
        $result = $campaignService->mutate($operations);
        return $result;
    }
    
    /**
     * 编辑广告组
     * @param string $adGroupId the id of the ad group to update
     */
    function UpdateAdGroup($update,$adGroupId) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
    
        // Create ad group using an existing ID.
        $adGroup = new AdGroup();
        $adGroup->id = $adGroupId;
    
        foreach($update as $field=>$value){
            switch($field){
                case 'cpc_amount':// Update the bid.
                    $bid = new CpcBid();
                    $bid->bid =  new Money($value * AdWordsConstants::MICROS_PER_DOLLAR);
                    $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
                    $biddingStrategyConfiguration->bids[] = $bid;
                    $adGroup->biddingStrategyConfiguration = $biddingStrategyConfiguration;
                    break;
    
                default:
                    $adGroup->$field=$value;
                    break;
            }
        }
        // Create operation.
        $operation = new AdGroupOperation();
        $operation->operand = $adGroup;
        $operation->operator = 'SET';
    
        $operations = array($operation);
    
        // Make the mutate request.
        $result = $adGroupService->mutate($operations);
        return $result;
        // Display result.
        //$adGroup = $result->value[0];
        //printf("Ad group with ID '%s' has updated default bid '$%s'.\n", $adGroup->id,$adGroup->biddingStrategyConfiguration->bids[0]->bid->microAmount/AdWordsConstants::MICROS_PER_DOLLAR);
    
    }
    
    /**
     * 修改关键词
     * @param string $adGroupId the id of the ad group that contains the keyword
     * @param string $criterionId the id of the keyword
     */
    function UpdateKeyword($adGroupId,$status, $criterionId_ar) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $adGroupCriterionService =
        $user->GetService('AdGroupCriterionService', ADWORDS_VERSION);
    
        $operations=[];
        foreach($criterionId_ar as $criterionId){
            // Create ad group criterion.
            $adGroupCriterion = new BiddableAdGroupCriterion();
            $adGroupCriterion->adGroupId = $adGroupId;
            // Create criterion using an existing ID. Use the base class Criterion
            // instead of Keyword to avoid having to set keyword-specific fields.
            $adGroupCriterion->criterion = new Criterion($criterionId);
            
            // Update final URL.
            $adGroupCriterion->finalUrls = array('http://www.example.com/new');
            //$adGroupCriterion->userStatus = 'PAUSED';
            $adGroupCriterion->userStatus = $status;
            
            // Create operation.
            $operation = new AdGroupCriterionOperation();
            $operation->operand = $adGroupCriterion;
            $operation->operator = 'SET';
            $operations[]=$operation;
        }
        
        // Make the mutate request.
        $result = $adGroupCriterionService->mutate($operations);
        return $result;
        
    }

    /**
     * 删除广告系列
     * @param campaignId int 
     * */
    function RemoveCampaign($campaignId) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $campaignService = $user->GetService('CampaignService', ADWORDS_VERSION);
        
        // Create campaign with REMOVED status.
        $campaign = new Campaign();
        $campaign->id = $campaignId;
        $campaign->status = 'REMOVED';
        
        // Create operations.
        $operation = new CampaignOperation();
        $operation->operand = $campaign;
        $operation->operator = 'SET';
        
        $operations = array($operation);
        
        // Make the mutate request.
        $result = $campaignService->mutate($operations);
        return $result;
    }
    
    
    /**
     * 删除广告组
     * @param string $adGroupId the id of the ad group to remove
     */
    function RemoveAdGroup($adGroupId) {
        $user=$this->user;
        // Get the service, which loads the required classes.
        $adGroupService = $user->GetService('AdGroupService', ADWORDS_VERSION);
    
        // Create ad group with REMOVED status.
        $adGroup = new AdGroup();
        $adGroup->id = $adGroupId;
        $adGroup->status = 'REMOVED';
    
        // Create operations.
        $operation = new AdGroupOperation();
        $operation->operand = $adGroup;
        $operation->operator = 'SET';
    
        $operations = array($operation);
    
        // Make the mutate request.
        $result = $adGroupService->mutate($operations);
        return $result;
        
    }
    
    
}