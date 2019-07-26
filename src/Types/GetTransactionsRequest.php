<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: get_with_proof.proto

namespace Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Get up to limit transactions starting from start_version.
 *
 * Generated from protobuf message <code>types.GetTransactionsRequest</code>
 */
class GetTransactionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The version of the transaction to start with for this query.  Use a version
     * of MAX_INT to represent the latest.
     *
     * Generated from protobuf field <code>uint64 start_version = 1;</code>
     */
    private $start_version = 0;
    /**
     * Limit number of results
     *
     * Generated from protobuf field <code>uint64 limit = 2;</code>
     */
    private $limit = 0;
    /**
     * Set to true to fetch events for the transaction at each version
     *
     * Generated from protobuf field <code>bool fetch_events = 3;</code>
     */
    private $fetch_events = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start_version
     *           The version of the transaction to start with for this query.  Use a version
     *           of MAX_INT to represent the latest.
     *     @type int|string $limit
     *           Limit number of results
     *     @type bool $fetch_events
     *           Set to true to fetch events for the transaction at each version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GetWithProof::initOnce();
        parent::__construct($data);
    }

    /**
     * The version of the transaction to start with for this query.  Use a version
     * of MAX_INT to represent the latest.
     *
     * Generated from protobuf field <code>uint64 start_version = 1;</code>
     * @return int|string
     */
    public function getStartVersion()
    {
        return $this->start_version;
    }

    /**
     * The version of the transaction to start with for this query.  Use a version
     * of MAX_INT to represent the latest.
     *
     * Generated from protobuf field <code>uint64 start_version = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartVersion($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_version = $var;

        return $this;
    }

    /**
     * Limit number of results
     *
     * Generated from protobuf field <code>uint64 limit = 2;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Limit number of results
     *
     * Generated from protobuf field <code>uint64 limit = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Set to true to fetch events for the transaction at each version
     *
     * Generated from protobuf field <code>bool fetch_events = 3;</code>
     * @return bool
     */
    public function getFetchEvents()
    {
        return $this->fetch_events;
    }

    /**
     * Set to true to fetch events for the transaction at each version
     *
     * Generated from protobuf field <code>bool fetch_events = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFetchEvents($var)
    {
        GPBUtil::checkBool($var);
        $this->fetch_events = $var;

        return $this;
    }

}
