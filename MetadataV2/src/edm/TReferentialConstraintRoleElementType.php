<?php

namespace MetadataV2\edm;

/**
 * Class representing TReferentialConstraintRoleElementType
 *
 *
 * XSD Type: TReferentialConstraintRoleElement
 */
class TReferentialConstraintRoleElementType
{

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property \MetadataV2\edm\TPropertyRefType[] $propertyRef
     */
    private $propertyRef = array(
        
    );

    /**
     * Gets as role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as propertyRef
     *
     * @return self
     * @param \MetadataV2\edm\TPropertyRefType $propertyRef
     */
    public function addToPropertyRef(\MetadataV2\edm\TPropertyRefType $propertyRef)
    {
        $this->propertyRef[] = $propertyRef;
        return $this;
    }

    /**
     * isset propertyRef
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyRef($index)
    {
        return isset($this->propertyRef[$index]);
    }

    /**
     * unset propertyRef
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyRef($index)
    {
        unset($this->propertyRef[$index]);
    }

    /**
     * Gets as propertyRef
     *
     * @return \MetadataV2\edm\TPropertyRefType[]
     */
    public function getPropertyRef()
    {
        return $this->propertyRef;
    }

    /**
     * Sets a new propertyRef
     *
     * @param \MetadataV2\edm\TPropertyRefType[] $propertyRef
     * @return self
     */
    public function setPropertyRef(array $propertyRef)
    {
        $this->propertyRef = $propertyRef;
        return $this;
    }


}
