<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/07/20
 * Time: 3:43 PM
 */

namespace AlgoWeb\ODataMetadata\Tests\Unit\Edm\Validation\Internal;

use AlgoWeb\ODataMetadata\Edm\Validation\EdmErrorCode;
use AlgoWeb\ODataMetadata\Edm\Validation\Internal\InterfaceValidator;
use AlgoWeb\ODataMetadata\Enums\PrimitiveTypeKind;
use AlgoWeb\ODataMetadata\Exception\ArgumentNullException;
use AlgoWeb\ODataMetadata\Interfaces\Expressions\IExpression;
use AlgoWeb\ODataMetadata\Interfaces\IPrimitiveType;
use AlgoWeb\ODataMetadata\Interfaces\IPrimitiveTypeReference;
use AlgoWeb\ODataMetadata\Interfaces\IType;
use AlgoWeb\ODataMetadata\Interfaces\ITypeReference;
use AlgoWeb\ODataMetadata\Tests\TestCase;
use Mockery as m;

class InterfaceValidatorTest extends TestCase
{
    public function testCheckInterfaceMismatchWithActualImplement()
    {
        $interface = IExpression::class;
        $item = m::mock(IExpression::class)->makePartial();

        $expected = null;
        $actual = InterfaceValidator::CheckForInterfaceKindValueMismatchError(
            $item,
            PrimitiveTypeKind::None(),
            'propertyName',
            $interface
        );

        $this->assertEquals($expected, $actual);
    }

    public function testCreateTypeRefInterfaceTypeKindValueMismatchErrorWithNullDefinition()
    {
        $item = m::mock(ITypeReference::class);
        $item->shouldReceive('getDefinition')->andReturn(null)->atLeast(1);

        $this->expectException(ArgumentNullException::class);
        $this->expectExceptionMessage('Value for parameter item.Definition cannot be null.');
        InterfaceValidator::CreateTypeRefInterfaceTypeKindValueMismatchError($item);
    }

    public function testCreateTypeRefInterfaceTypeKindValueMismatchErrorWithNonNullDefinition()
    {
        $def = m::mock(IType::class);
        $def->shouldReceive('getTypeKind->getKey')->andReturn(42);

        $item = m::mock(ITypeReference::class);
        $item->shouldReceive('getDefinition')->andReturn($def)->atLeast(1);

        $result = InterfaceValidator::CreateTypeRefInterfaceTypeKindValueMismatchError($item);

        $errorCode = EdmErrorCode::InterfaceCriticalKindValueMismatch();
        $this->assertEquals($errorCode, $result->getErrorCode());

        $expected = 'interface has type definition of kind \'42\'. The type reference interface must match to the kind of the  definition.';
        $actual = $result->getErrorMessage();
        $this->assertContains($expected, $actual);
    }

    public function testCreatePrimitiveTypeRefInterfaceTypeKindValueMismatchErrorWithNullDefinition()
    {
        $item = m::mock(IPrimitiveTypeReference::class);
        $item->shouldReceive('getDefinition')->andReturn(null)->atLeast(1);

        $this->expectExceptionMessage('item.Definition is IEdmPrimitiveType');
        InterfaceValidator::CreatePrimitiveTypeRefInterfaceTypeKindValueMismatchError($item);
    }

    public function testCreatePrimitiveTypeRefInterfaceTypeKindValueMismatchErrorWithGoodDefinition()
    {
        $def = m::mock(IPrimitiveType::class);
        $def->shouldReceive('getPrimitiveKind')->andReturn(PrimitiveTypeKind::None());

        $item = m::mock(IPrimitiveTypeReference::class);
        $item->shouldReceive('getDefinition')->andReturn($def)->atLeast(1);

        $result = InterfaceValidator::CreatePrimitiveTypeRefInterfaceTypeKindValueMismatchError($item);
        $errorCode = EdmErrorCode::InterfaceCriticalKindValueMismatch();
        $this->assertEquals($errorCode, $result->getErrorCode());

        $expected = 'interface has type definition of kind \'None\'. The type reference interface must match to the kind of the  definition.';
        $actual = $result->getErrorMessage();
        $this->assertContains($expected, $actual);
    }

    public function testProcessEnumerableWithNullEnumerable()
    {
        $enum = null;
        $item = m::mock(IExpression::class);
        $propName = 'property';
        $targList = [];
        $errors = [];

        InterfaceValidator::ProcessEnumerable($item, $enum, $propName, $targList, $errors);

        $this->assertEquals(1, count($errors));
        $result = $errors[0];

        $errorCode = EdmErrorCode::InterfaceCriticalPropertyValueMustNotBeNull();
        $this->assertEquals($errorCode, $result->getErrorCode());

        $expected = 'must not be null.';
        $actual = $result->getErrorMessage();
        $this->assertContains($expected, $actual);
    }

    public function testProcessEnumerableWithEmptyEnumerable()
    {
        $enum = [];
        $item = m::mock(IExpression::class);
        $propName = 'property';
        $targList = [];
        $errors = [];

        InterfaceValidator::ProcessEnumerable($item, $enum, $propName, $targList, $errors);

        $this->assertEquals(0, count($errors));
        $this->assertEquals(0, count($targList));
    }

    public function testProcessEnumerableWithTwoChoicesNullFirst()
    {
        $enum = [null, m::mock(IExpression::class)];
        $item = m::mock(IExpression::class);
        $propName = 'property';
        $targList = [];
        $errors = [];

        InterfaceValidator::ProcessEnumerable($item, $enum, $propName, $targList, $errors);

        $this->assertEquals(1, count($errors));
        $this->assertEquals(0, count($targList));
    }

    public function testProcessEnumerableWithTwoChoicesNullSecond()
    {
        $enum = [m::mock(IExpression::class), null];
        $item = m::mock(IExpression::class);
        $propName = 'property';
        $targList = [];
        $errors = [];

        InterfaceValidator::ProcessEnumerable($item, $enum, $propName, $targList, $errors);

        $this->assertEquals(1, count($errors));
        $this->assertEquals(1, count($targList));
    }
}
