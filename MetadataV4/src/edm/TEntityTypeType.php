<?php

namespace AlgoWeb\ODataMetadata\MetadataV4\edm;

/**
 * Class representing TEntityTypeType
 *
 *
 * XSD Type: TEntityType
 */
class TEntityTypeType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $baseType
     */
    private $baseType = null;

    /**
     * @property boolean $abstract
     */
    private $abstract = null;

    /**
     * @property boolean $openType
     */
    private $openType = null;

    /**
     * @property boolean $hasStream
     */
    private $hasStream = null;

    /**
     * @property \MetadataV4\edm\TPropertyRefType[] $key
     */
    private $key = null;

    /**
     * @property \MetadataV4\edm\TPropertyType[] $property
     */
    private $property = array(
        
    );

    /**
     * @property \MetadataV4\edm\TNavigationPropertyType[] $navigationProperty
     */
    private $navigationProperty = array(
        
    );

    /**
     * @property \MetadataV4\edm\Annotation[] $annotation
     */
    private $annotation = array(
        
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
     * Gets as baseType
     *
     * @return string
     */
    public function getBaseType()
    {
        return $this->baseType;
    }

    /**
     * Sets a new baseType
     *
     * @param string $baseType
     * @return self
     */
    public function setBaseType($baseType)
    {
        $this->baseType = $baseType;
        return $this;
    }

    /**
     * Gets as abstract
     *
     * @return boolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets a new abstract
     *
     * @param boolean $abstract
     * @return self
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Gets as openType
     *
     * @return boolean
     */
    public function getOpenType()
    {
        return $this->openType;
    }

    /**
     * Sets a new openType
     *
     * @param boolean $openType
     * @return self
     */
    public function setOpenType($openType)
    {
        $this->openType = $openType;
        return $this;
    }

    /**
     * Gets as hasStream
     *
     * @return boolean
     */
    public function getHasStream()
    {
        return $this->hasStream;
    }

    /**
     * Sets a new hasStream
     *
     * @param boolean $hasStream
     * @return self
     */
    public function setHasStream($hasStream)
    {
        $this->hasStream = $hasStream;
        return $this;
    }

    /**
     * Adds as propertyRef
     *
     * @return self
     * @param \MetadataV4\edm\TPropertyRefType $propertyRef
     */
    public function addToKey(\MetadataV4\edm\TPropertyRefType $propertyRef)
    {
        $this->key[] = $propertyRef;
        return $this;
    }

    /**
     * isset key
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKey($index)
    {
        return isset($this->key[$index]);
    }

    /**
     * unset key
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKey($index)
    {
        unset($this->key[$index]);
    }

    /**
     * Gets as key
     *
     * @return \MetadataV4\edm\TPropertyRefType[]
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * @param \MetadataV4\edm\TPropertyRefType[] $key
     * @return self
     */
    public function setKey(array $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Adds as property
     *
     * @return self
     * @param \MetadataV4\edm\TPropertyType $property
     */
    public function addToProperty(\MetadataV4\edm\TPropertyType $property)
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
     * @return \MetadataV4\edm\TPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \MetadataV4\edm\TPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as navigationProperty
     *
     * @return self
     * @param \MetadataV4\edm\TNavigationPropertyType $navigationProperty
     */
    public function addToNavigationProperty(\MetadataV4\edm\TNavigationPropertyType $navigationProperty)
    {
        $this->navigationProperty[] = $navigationProperty;
        return $this;
    }

    /**
     * isset navigationProperty
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNavigationProperty($index)
    {
        return isset($this->navigationProperty[$index]);
    }

    /**
     * unset navigationProperty
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNavigationProperty($index)
    {
        unset($this->navigationProperty[$index]);
    }

    /**
     * Gets as navigationProperty
     *
     * @return \MetadataV4\edm\TNavigationPropertyType[]
     */
    public function getNavigationProperty()
    {
        return $this->navigationProperty;
    }

    /**
     * Sets a new navigationProperty
     *
     * @param \MetadataV4\edm\TNavigationPropertyType[] $navigationProperty
     * @return self
     */
    public function setNavigationProperty(array $navigationProperty)
    {
        $this->navigationProperty = $navigationProperty;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \MetadataV4\edm\Annotation $annotation
     */
    public function addToAnnotation(\MetadataV4\edm\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \MetadataV4\edm\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \MetadataV4\edm\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }
}
