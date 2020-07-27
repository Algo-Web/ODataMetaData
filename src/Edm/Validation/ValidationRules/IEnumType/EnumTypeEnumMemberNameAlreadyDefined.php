<?php

declare(strict_types=1);


namespace AlgoWeb\ODataMetadata\Edm\Validation\ValidationRules\IEnumType;

use AlgoWeb\ODataMetadata\Edm\Validation\EdmErrorCode;
use AlgoWeb\ODataMetadata\Edm\Validation\Internal\ValidationHelper;
use AlgoWeb\ODataMetadata\Edm\Validation\ValidationContext;
use AlgoWeb\ODataMetadata\Interfaces\IEdmElement;
use AlgoWeb\ODataMetadata\Interfaces\IEnumType;
use AlgoWeb\ODataMetadata\StringConst;
use AlgoWeb\ODataMetadata\Structure\HashSetInternal;

/**
 * Validates that there are not duplicate enum members in an enum.
 *
 * @package AlgoWeb\ODataMetadata\Edm\Validation\ValidationRules\IEnumType
 */
class EnumTypeEnumMemberNameAlreadyDefined extends EnumTypeRule
{
    public function __invoke(ValidationContext $context, ?IEdmElement $enumType)
    {
        assert($enumType instanceof IEnumType);
        $memberNames = new HashSetInternal();
        $members = $enumType->getMembers();
        foreach ($members as $member) {
            // We only want to report the properties that are declared in this type. Otherwise properties will get
            // reported multiple times due to inheritance.
            if ($member != null) {
                ValidationHelper::addMemberNameToHashSet(
                    $member,
                    $memberNames,
                    $context,
                    EdmErrorCode::AlreadyDefined(),
                    StringConst::EdmModel_Validator_Semantic_EnumMemberNameAlreadyDefined($member->getName()),
                    false
                );
            }
        }
    }
}
