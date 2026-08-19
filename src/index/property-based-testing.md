# Property-Based Testing
Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them. For instance, ``reverse(reverse($array)) === $array`` should hold for any array.

When a failing case is found, most property-based testing frameworks shrink the input to the smallest counter-example that still fails, which makes the root cause much easier to identify than with a single random failure.

This approach complements example-based unit tests: it explores the input space more broadly and often uncovers edge cases, such as empty arrays, negative numbers, or unicode strings, that developers would not have thought to write by hand.

Popular PHP implementations include Eris and PHP-Quickcheck, inspired by Haskell's QuickCheck.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-based-testing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property-based-testing.html","name":"Property-Based Testing","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 06:45:57 +0000","dateModified":"Sun, 02 Aug 2026 06:45:57 +0000","description":"Property-based testing is a testing technique where, instead of writing individual examples, the developer describes properties that should always hold for a function, then a framework generates a large number of random inputs to try to falsify them","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Property-Based Testing.html"]}],"alternateName":["generative-testing"],"keywords":["testing","methodology"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unit-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fuzzing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutation-test.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/edge-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-framework.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Software_testing#Property_testing"},{"@type":"CreativeWork","name":"QuickCheck","url":"https:\/\/en.wikipedia.org\/wiki\/QuickCheck"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"property-based-testing"}]}]}</script>
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

+ [Test](test.html)
+ [Unit Test](unit-test.html)
+ [Fuzzing](fuzzing.html)
+ [Mutation Testing](mutation-test.html)
+ [Edge Case](edge-case.html)
+ [Test Framework](test-framework.html)
+ [Assertions](assertion.html)

## Related packages

+ [giorgiosironi/eris](https://packagist.org/packages/giorgiosironi/eris)
