<?php


namespace AlgoWeb\ODataMetadata\Helpers;

use AlgoWeb\ODataMetadata\Interfaces\IComplexType;
use AlgoWeb\ODataMetadata\Interfaces\IComplexTypeReference;

/**
 * Class ComplexTypeReferenceHelpers
 * @package AlgoWeb\ODataMetadata\Helpers
 */
trait ComplexTypeReferenceHelpers
{
    /**
     * Gets the definition of this reference typed as an IComplexTypeDefinition.
     *
     * @return IComplexType The definition of this reference
     */
    public function ComplexDefinition(): IComplexType
    {
        /**
         * @var IComplexTypeReference $this
         */
        $definition = $this->getDefinition();
        assert($definition instanceof IComplexType, 'ComplexType References should always wrap a complex type');
        return $definition;
    }

    /**
     * Gets the base type of this reference.
     *
     * @return IComplexType The base type of this reference.
     */
    public function BaseComplexType(): IComplexType
    {
        return $this->ComplexDefinition()->BaseComplexType();
    }
}