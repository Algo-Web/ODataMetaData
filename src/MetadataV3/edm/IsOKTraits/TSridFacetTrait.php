<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\IsOKTraits;

use AlgoWeb\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TSridFacetTrait
{
    use XSDTopLevelTrait, TVariableTrait;

    public function isTSridFacetValid($string)
    {
        if (!$this->isTVariableValid($string)) {
            return false;
        }
        return $this->nonNegativeInteger($string);
    }
}
