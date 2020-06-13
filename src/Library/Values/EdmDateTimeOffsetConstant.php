<?php


namespace AlgoWeb\ODataMetadata\Library\Values;


use AlgoWeb\ODataMetadata\Enums\ExpressionKind;
use AlgoWeb\ODataMetadata\Enums\ValueKind;
use AlgoWeb\ODataMetadata\Interfaces\Expressions\IDateTimeOffsetConstantExpression;
use AlgoWeb\ODataMetadata\Interfaces\ITemporalTypeReference;
use DateTime;

/**
 * Represents an EDM datetime with offset constant.
 *
 * @package AlgoWeb\ODataMetadata\Library\Values
 */
class EdmDateTimeOffsetConstant extends EdmValue implements IDateTimeOffsetConstantExpression
{
    private $value;

    /**
     * Initializes a new instance of the EdmBooleanConstant class.
     *
     * @param DateTime $value Boolean value represented by this value.
     * @param ITemporalTypeReference|null $type Type of the boolean.
     */
    public function __construct( DateTime $value, ?ITemporalTypeReference $type = null)
    {
        parent::__construct($type);
        $this->value = $value;
    }

    /**
     *
     *
     * @return DateTime Gets the definition of this binary value.
     */
    public function getValue(): DateTime
    {
        return $this->value;
    }

    /**
     * @return ExpressionKind Gets the kind of this expression.
     */
    public function getExpressionKind(): ExpressionKind
    {
        return ExpressionKind::DateTimeOffsetConstant();
    }

    /**
     * @return ValueKind Gets the kind of this value.
     */
    public function getValueKind(): ValueKind
    {
        return ValueKind::DateTimeOffset();
    }

}