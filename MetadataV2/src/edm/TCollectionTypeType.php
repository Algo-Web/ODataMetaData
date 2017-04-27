<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\edm;

/**
 * Class representing TCollectionTypeType
 *
 *
 * XSD Type: TCollectionType
 */
class TCollectionTypeType
{

    /**
     * @property string $elementType
     */
    private $elementType = null;

    /**
     * @property boolean $nullable
     */
    private $nullable = null;

    /**
     * @property string $defaultValue
     */
    private $defaultValue = null;

    /**
     * @property string $maxLength
     */
    private $maxLength = null;

    /**
     * @property boolean $fixedLength
     */
    private $fixedLength = null;

    /**
     * @property integer $precision
     */
    private $precision = null;

    /**
     * @property integer $scale
     */
    private $scale = null;

    /**
     * @property boolean $unicode
     */
    private $unicode = null;

    /**
     * @property string $collation
     */
    private $collation = null;

    /**
     * @property \MetadataV2\edm\TCollectionTypeType $collectionType
     */
    private $collectionType = null;

    /**
     * @property \MetadataV2\edm\TReferenceTypeType $referenceType
     */
    private $referenceType = null;

    /**
     * @property \MetadataV2\edm\TPropertyType[] $rowType
     */
    private $rowType = null;

    /**
     * @property \MetadataV2\edm\TTypeRefType $typeRef
     */
    private $typeRef = null;

    /**
     * Gets as elementType
     *
     * @return string
     */
    public function getElementType()
    {
        return $this->elementType;
    }

    /**
     * Sets a new elementType
     *
     * @param string $elementType
     * @return self
     */
    public function setElementType($elementType)
    {
        $this->elementType = $elementType;
        return $this;
    }

    /**
     * Gets as nullable
     *
     * @return boolean
     */
    public function getNullable()
    {
        return $this->nullable;
    }

    /**
     * Sets a new nullable
     *
     * @param boolean $nullable
     * @return self
     */
    public function setNullable($nullable)
    {
        $this->nullable = $nullable;
        return $this;
    }

    /**
     * Gets as defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * @param string $defaultValue
     * @return self
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as maxLength
     *
     * @return string
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Sets a new maxLength
     *
     * @param string $maxLength
     * @return self
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * Gets as fixedLength
     *
     * @return boolean
     */
    public function getFixedLength()
    {
        return $this->fixedLength;
    }

    /**
     * Sets a new fixedLength
     *
     * @param boolean $fixedLength
     * @return self
     */
    public function setFixedLength($fixedLength)
    {
        $this->fixedLength = $fixedLength;
        return $this;
    }

    /**
     * Gets as precision
     *
     * @return integer
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Sets a new precision
     *
     * @param integer $precision
     * @return self
     */
    public function setPrecision($precision)
    {
        $this->precision = $precision;
        return $this;
    }

    /**
     * Gets as scale
     *
     * @return integer
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale
     *
     * @param integer $scale
     * @return self
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Gets as unicode
     *
     * @return boolean
     */
    public function getUnicode()
    {
        return $this->unicode;
    }

    /**
     * Sets a new unicode
     *
     * @param boolean $unicode
     * @return self
     */
    public function setUnicode($unicode)
    {
        $this->unicode = $unicode;
        return $this;
    }

    /**
     * Gets as collation
     *
     * @return string
     */
    public function getCollation()
    {
        return $this->collation;
    }

    /**
     * Sets a new collation
     *
     * @param string $collation
     * @return self
     */
    public function setCollation($collation)
    {
        $this->collation = $collation;
        return $this;
    }

    /**
     * Gets as collectionType
     *
     * @return \MetadataV2\edm\TCollectionTypeType
     */
    public function getCollectionType()
    {
        return $this->collectionType;
    }

    /**
     * Sets a new collectionType
     *
     * @param \MetadataV2\edm\TCollectionTypeType $collectionType
     * @return self
     */
    public function setCollectionType(\MetadataV2\edm\TCollectionTypeType $collectionType)
    {
        $this->collectionType = $collectionType;
        return $this;
    }

    /**
     * Gets as referenceType
     *
     * @return \MetadataV2\edm\TReferenceTypeType
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * Sets a new referenceType
     *
     * @param \MetadataV2\edm\TReferenceTypeType $referenceType
     * @return self
     */
    public function setReferenceType(\MetadataV2\edm\TReferenceTypeType $referenceType)
    {
        $this->referenceType = $referenceType;
        return $this;
    }

    /**
     * Adds as property
     *
     * @return self
     * @param \MetadataV2\edm\TPropertyType $property
     */
    public function addToRowType(\MetadataV2\edm\TPropertyType $property)
    {
        $this->rowType[] = $property;
        return $this;
    }

    /**
     * isset rowType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRowType($index)
    {
        return isset($this->rowType[$index]);
    }

    /**
     * unset rowType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRowType($index)
    {
        unset($this->rowType[$index]);
    }

    /**
     * Gets as rowType
     *
     * @return \MetadataV2\edm\TPropertyType[]
     */
    public function getRowType()
    {
        return $this->rowType;
    }

    /**
     * Sets a new rowType
     *
     * @param \MetadataV2\edm\TPropertyType[] $rowType
     * @return self
     */
    public function setRowType(array $rowType)
    {
        $this->rowType = $rowType;
        return $this;
    }

    /**
     * Gets as typeRef
     *
     * @return \MetadataV2\edm\TTypeRefType
     */
    public function getTypeRef()
    {
        return $this->typeRef;
    }

    /**
     * Sets a new typeRef
     *
     * @param \MetadataV2\edm\TTypeRefType $typeRef
     * @return self
     */
    public function setTypeRef(\MetadataV2\edm\TTypeRefType $typeRef)
    {
        $this->typeRef = $typeRef;
        return $this;
    }
}
