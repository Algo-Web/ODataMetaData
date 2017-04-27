<?php

namespace MetadataV1\edm;

/**
 * Class representing TComplexTypeType
 *
 *
 * XSD Type: TComplexType
 */
class TComplexTypeType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $typeAccess
     */
    private $typeAccess = null;

    /**
     * @property \MetadataV1\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \MetadataV1\edm\TComplexTypePropertyType[] $property
     */
    private $property = array(
        
    );

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as typeAccess
     *
     * @return string
     */
    public function getTypeAccess()
    {
        return $this->typeAccess;
    }

    /**
     * Sets a new typeAccess
     *
     * @param string $typeAccess
     * @return self
     */
    public function setTypeAccess($typeAccess)
    {
        $this->typeAccess = $typeAccess;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * @return \MetadataV1\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param \MetadataV1\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(\MetadataV1\edm\TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as property
     *
     * @return self
     * @param \MetadataV1\edm\TComplexTypePropertyType $property
     */
    public function addToProperty(\MetadataV1\edm\TComplexTypePropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * @return \MetadataV1\edm\TComplexTypePropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \MetadataV1\edm\TComplexTypePropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }


}
