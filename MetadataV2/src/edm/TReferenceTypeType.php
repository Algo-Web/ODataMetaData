<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\edm;

/**
 * Class representing TReferenceTypeType
 *
 *
 * XSD Type: TReferenceType
 */
class TReferenceTypeType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \MetadataV2\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * @return \MetadataV2\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param \MetadataV2\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(\MetadataV2\edm\TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }
}
