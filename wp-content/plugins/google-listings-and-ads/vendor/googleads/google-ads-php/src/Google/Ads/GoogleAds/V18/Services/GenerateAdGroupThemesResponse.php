<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [KeywordPlanIdeaService.GenerateAdGroupThemes][google.ads.googleads.v18.services.KeywordPlanIdeaService.GenerateAdGroupThemes].
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.GenerateAdGroupThemesResponse</code>
 */
class GenerateAdGroupThemesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of suggested AdGroup/keyword pairings.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.AdGroupKeywordSuggestion ad_group_keyword_suggestions = 1;</code>
     */
    private $ad_group_keyword_suggestions;
    /**
     * A list of provided AdGroups that could not be used as suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.UnusableAdGroup unusable_ad_groups = 2;</code>
     */
    private $unusable_ad_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V18\Services\AdGroupKeywordSuggestion>|\Google\Protobuf\Internal\RepeatedField $ad_group_keyword_suggestions
     *           A list of suggested AdGroup/keyword pairings.
     *     @type array<\Google\Ads\GoogleAds\V18\Services\UnusableAdGroup>|\Google\Protobuf\Internal\RepeatedField $unusable_ad_groups
     *           A list of provided AdGroups that could not be used as suggestions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of suggested AdGroup/keyword pairings.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.AdGroupKeywordSuggestion ad_group_keyword_suggestions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdGroupKeywordSuggestions()
    {
        return $this->ad_group_keyword_suggestions;
    }

    /**
     * A list of suggested AdGroup/keyword pairings.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.AdGroupKeywordSuggestion ad_group_keyword_suggestions = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V18\Services\AdGroupKeywordSuggestion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdGroupKeywordSuggestions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V18\Services\AdGroupKeywordSuggestion::class);
        $this->ad_group_keyword_suggestions = $arr;

        return $this;
    }

    /**
     * A list of provided AdGroups that could not be used as suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.UnusableAdGroup unusable_ad_groups = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnusableAdGroups()
    {
        return $this->unusable_ad_groups;
    }

    /**
     * A list of provided AdGroups that could not be used as suggestions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.UnusableAdGroup unusable_ad_groups = 2;</code>
     * @param array<\Google\Ads\GoogleAds\V18\Services\UnusableAdGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnusableAdGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V18\Services\UnusableAdGroup::class);
        $this->unusable_ad_groups = $arr;

        return $this;
    }

}

