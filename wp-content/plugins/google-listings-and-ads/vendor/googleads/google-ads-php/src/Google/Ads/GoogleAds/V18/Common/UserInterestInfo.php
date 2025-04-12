<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/common/criteria.proto

namespace Google\Ads\GoogleAds\V18\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a particular interest-based topic to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.common.UserInterestInfo</code>
 */
class UserInterestInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>optional string user_interest_category = 2;</code>
     */
    protected $user_interest_category = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_interest_category
     *           The UserInterest resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>optional string user_interest_category = 2;</code>
     * @return string
     */
    public function getUserInterestCategory()
    {
        return isset($this->user_interest_category) ? $this->user_interest_category : '';
    }

    public function hasUserInterestCategory()
    {
        return isset($this->user_interest_category);
    }

    public function clearUserInterestCategory()
    {
        unset($this->user_interest_category);
    }

    /**
     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>optional string user_interest_category = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserInterestCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_interest_category = $var;

        return $this;
    }

}

