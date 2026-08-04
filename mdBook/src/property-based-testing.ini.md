# Property-Based Testing
Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them. For instance, ``reverse(reverse($array)) === $array`` should hold for any array.

When a failing case is found, most property-based testing frameworks shrink the input to the smallest counter-example that still fails, which makes the root cause much easier to identify than with a single random failure.

This approach complements example-based unit tests: it explores the input space more broadly and often uncovers edge cases, such as empty arrays, negative numbers, or unicode strings, that developers would not have thought to write by hand.

Popular PHP implementations include Eris and PHP-Quickcheck, inspired by Haskell's QuickCheck.
```php
<?php

    use Eris\Generator;
    use Eris\TestTrait;

    class ReverseTest extends \PHPUnit\Framework\TestCase
    {
        use TestTrait;

        public function testReverseIsInvolution(): void
        {
            $this->forAll(Generator\seq(Generator\int()))
                ->then(function (array $array) {
                    $this->assertEquals($array, array_reverse(array_reverse($array)));
                });
        }
    }

?>
```

## See Also

+ [QuickCheck](https://en.wikipedia.org/wiki/QuickCheck)

Related : [Test](Test), [Unit Test](Unit Test), [Fuzzing](Fuzzing), [Mutation Testing](Mutation Testing), [Edge Case](Edge Case), [Test Framework](Test Framework), [Assertions](Assertions)
