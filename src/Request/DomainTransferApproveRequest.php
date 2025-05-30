<?php

namespace Metaregistrar\Api\Client\Request;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use Metaregistrar\Api\Client\Annotation\MustBeFilled;
use Metaregistrar\Api\Client\Annotation\Description;
use Metaregistrar\Api\Client\Annotation\DefaultValue;
use Metaregistrar\Api\Client\Response\DomainTransferInfoResponse;

/**
 * Class DomainListingCreateRequest
 * @package Metaregistrar\Api\Client\Request
 * @ExclusionPolicy("all")
 */
class DomainTransferApproveRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $url = 'domain/transfer/{name}/approve';
    
    /**
     * @var string
     */
    protected $method = self::METHOD_POST;


    /**
     * @var string
     */
    protected $expectedResponse = DomainTransferInfoResponse::class;
    /**
     * @var string
     * @MustBeFilled("yes")
     * @Description("the name should be a IDN domain in punycode format")
     */
    protected $name='';
    /**
     * @var array
     */
    protected $acceptableArgs = [
        "name"=>"string"
    ];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainTransferInfoRequest
     */
    public function setName(string $name): DomainTransferApproveRequest
    {
        $this->name = $name;
        return $this;
    }
}
