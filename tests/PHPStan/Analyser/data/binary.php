<?php

namespace BinaryOperations;

class Foo
{

	public function doFoo()
	{
		/** @var float $float */
		$float = doFoo();

		/** @var int $integer */
		$integer = doFoo();

		/** @var bool $bool */
		$bool = doFoo();

		/** @var string $string */
		$string = doFoo();

		$fooString = 'foo';

		/** @var string|null $stringOrNull */
		$stringOrNull = doFoo();

		$arrayOfIntegers = [$integer, $integer + 1, $integer + 2];

		$foo = new Foo();

		$one = 1;

		$array = [1, 2, 3];

		reset($array);

		/** @var number $number */
		$number = doFoo();

		/** @var int|null|bool $otherInteger */
		$otherInteger = doFoo();

		/** @var mixed $mixed */
		$mixed = doFoo();

		/** @var int[] $arrayOfUnknownIntegers */
		$arrayOfUnknownIntegers = doFoo();

		$foobarString = $fooString;
		$foobarString[6] = 'b';
		$foobarString[7] = 'a';
		$foobarString[8] = 'r';

		$std = new \stdClass();

		/** @var int[] $arrToPush */
		$arrToPush = doFoo();
		array_push($arrToPush, 'foo', new \stdClass());

		/** @var int[] $arrToPush2 */
		$arrToPush2 = doFoo();
		array_push($arrToPush2, ...['foo', new \stdClass()]);

		$arrToUnshift = ['foo' => new \stdClass(), 5 => 'test'];
		array_unshift($arrToUnshift, 'lorem', 5);

		/** @var int[] $arrToUnshift2 */
		$arrToUnshift2 = doFoo();
		array_unshift($arrToUnshift2, 'lorem', new \stdClass());

		$line = __LINE__;
		$dir = __DIR__;
		$file = __FILE__;
		$namespace = __NAMESPACE__;
		$class = __CLASS__;
		$method = __METHOD__;
		$function = __FUNCTION__;

		die;
	}

}
