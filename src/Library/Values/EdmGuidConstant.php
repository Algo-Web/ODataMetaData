<?php

declare(strict_types=1);


namespace AlgoWeb\ODataMetadata\Library\Values;

use AlgoWeb\ODataMetadata\Enums\ExpressionKind;
use AlgoWeb\ODataMetadata\Enums\ValueKind;
use AlgoWeb\ODataMetadata\Interfaces\Expressions\IGuidConstantExpression;
use AlgoWeb\ODataMetadata\Interfaces\IPrimitiveTypeReference;

/**
 * Represents an EDM guid constant.
 *
 * @package AlgoWeb\ODataMetadata\Library\Values
 */
class EdmGuidConstant extends EdmValue implements IGuidConstantExpression
{
    private $value;

    /**
     * Initializes a new instance of the EdmGuidConstant class.
     *
     * @param string                  $value string value represented by this value
     * @param IPrimitiveTypeReference $type  type of the guid
     */
    public function __construct(string $value, IPrimitiveTypeReference $type)
    {
        parent::__construct($type);
        $this->value = $value;
    }

    /**
     * @return string gets the definition of this binary value
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return ExpressionKind gets the kind of this expression
     */
    public function getExpressionKind(): ExpressionKind
    {
        return ExpressionKind::GuidConstant();
    }

    /**
     * @return ValueKind gets the kind of this value
     */
    public function getValueKind(): ValueKind
    {
        return ValueKind::Guid();
    }
}