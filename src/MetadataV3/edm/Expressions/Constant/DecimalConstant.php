<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\Edm\Expressions\Constant;

use AlgoWeb\ODataMetadata\MetadataV3\DomBase;
use AlgoWeb\ODataMetadata\OdataVersions;
use AlgoWeb\ODataMetadata\Writer\AttributeContainer;

/**
 * Class representing TDecimalConstantExpressionType.
 *
 * 16.1.5 The Edm:Decimal Constant Expression
 *
 * The Edm:Decimal constant expression evaluates to a primitive decimal value. A decimal expression MUST be assigned a
 * value of the type [xs:decimal][csdl19].
 *
 * A decimal expression may be written with either element notation or attribute notation, as shown in the
 * following examples:
 *
 *     <ValueAnnotation Term="org.example.display.Width" Decimal="3.14" />
 *
 *     <ValueAnnotation Term="org.example.display.Width">
 *         <Decimal>3.14</Decimal>
 *     </ValueAnnotation>
 *
 * @see https://www.odata.org/documentation/odata-version-3-0/common-schema-definition-language-csdl/#csdl16.1.5
 * XSD Type: TDecimalConstantExpression
 */
class DecimalConstant extends ConstantBase
{
    /**
     * Construct.
     *
     * @param float $value
     */
    public function __construct(float $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value.
     *
     * @param  float $value
     * @return float
     */
    public function value(float $value = null): float
    {
        if (null !== $value) {
            $this->__value = $value;
        }
        return $this->__value;
    }

    /**
     * @return string
     */
    public function getDomName(): string
    {
        return 'Decimal';
    }
}
