<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersion;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class FunctionVersionContentContext extends InstanceContext {
    /**
     * Initialize the FunctionVersionContentContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to fetch the Function
     *                           Version content from
     * @param string $functionSid The SID of the function that is the parent of the
     *                            Function Version content to fetch
     * @param string $sid The SID that identifies the Function Version content to
     *                    fetch
     */
    public function __construct(Version $version, $serviceSid, $functionSid, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'functionSid' => $functionSid, 'sid' => $sid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Functions/' . \rawurlencode($functionSid) . '/Versions/' . \rawurlencode($sid) . '/Content';
    }

    /**
     * Fetch the FunctionVersionContentInstance
     *
     * @return FunctionVersionContentInstance Fetched FunctionVersionContentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): FunctionVersionContentInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new FunctionVersionContentInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['functionSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Serverless.V1.FunctionVersionContentContext ' . \implode(' ', $context) . ']';
    }
}