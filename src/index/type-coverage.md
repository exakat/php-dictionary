# Type Coverage
Type coverage reports how much of the PHP code has types. The elements that can be typed are: 

+ Arguments in methods
+ Return type
+ Properties
+ Class constants

Some elements cannot be typed: 

+ Arrays
+ Lexical variables
+ Yield values
+ Local variables.

Type coverage is used as a metrics, to ensure that every line of code is used at least once during the tests. While it is a necessary feature, this is not always sufficient to ensure that the application is well tested, as lines of code are reused in several situations, and would require multiple tests.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-coverage.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-coverage.html","name":"Type Coverage","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Type coverage reports how much of the PHP code has types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Type Coverage.html"]}],"keywords":["type","static analysis"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coverage.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.declarations.php"},{"@type":"CreativeWork","name":"How to Measure Your Type Coverage","url":"https:\/\/tomasvotruba.com\/blog\/how-to-measure-your-type-coverage"},{"@type":"CreativeWork","name":"phpunit\/php-code-coverage","url":"https:\/\/github.com\/sebastianbergmann\/php-code-coverage"},{"@type":"CreativeWork","name":"PHP code coverage tool","url":"https:\/\/php.watch\/articles\/php-code-coverage-comparison"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"type-coverage"}]}]}</script>
```php
<?php

    function foo($i = 0) : int {
        return $i + 1;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php)**
## See Also

+ [How to Measure Your Type Coverage](https://tomasvotruba.com/blog/how-to-measure-your-type-coverage)
+ [phpunit/php-code-coverage](https://github.com/sebastianbergmann/php-code-coverage)
+ [PHP code coverage tool](https://php.watch/articles/php-code-coverage-comparison)

## Related

+ [Type System](type.html)
+ [Coverage](coverage.html)
+ [Analysis](analysis.html)
+ [Type Checking](type-checking.html)
+ [Type Inference](type-inference.html)

## Related packages

+ [tomasvotruba/type-coverage](https://packagist.org/packages/tomasvotruba/type-coverage)
