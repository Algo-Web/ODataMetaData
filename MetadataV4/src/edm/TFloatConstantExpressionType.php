<?php

namespace AlgoWeb\ODataMetadata\MetadataV4\edm;
/**
 * Class representing TFloatConstantExpressionType
 *
 *
 * XSD Type: TFloatConstantExpression
 */
class TFloatConstantExpressionType
{

    /**
     * @property float $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float ...$value
     * @return float
     */
    public function value(...$value)
    {
        if (0 < count($value)) {
            $this->__value = $value[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
