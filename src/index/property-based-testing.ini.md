# Property-Based Testing
Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them. For instance, ``reverse(reverse($array)) === $array`` should hold for any array.

When a failing case is found, most property-based testing frameworks shrink the input to the smallest counter-example that still fails, which makes the root cause much easier to identify than with a single random failure.

This approach complements example-based unit tests: it explores the input space more broadly and often uncovers edge cases, such as empty arrays, negative numbers, or unicode strings, that developers would not have thought to write by hand.

Popular PHP implementations include Eris and PHP-Quickcheck, inspired by Haskell's QuickCheck.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/property-based-testing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/property-based-testing.ini.html","name":"Property-Based Testing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:45:57 +0000","dateModified":"Sun, 02 Aug 2026 06:45:57 +0000","description":"Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Property-Based Testing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Software_testing#Property_testing)**
## See Also

+ [QuickCheck](https://en.wikipedia.org/wiki/QuickCheck)

## Related

+ [Test](test.ini.html)
+ [Unit Test](unit-test.ini.html)
+ [Fuzzing](fuzzing.ini.html)
+ [Mutation Testing](mutation-test.ini.html)
+ [Edge Case](edge-case.ini.html)
+ [Test Framework](test-framework.ini.html)
+ [Assertions](assertion.ini.html)

## Related packages

+ [giorgiosironi/eris](https://packagist.org/packages/giorgiosironi/eris)
