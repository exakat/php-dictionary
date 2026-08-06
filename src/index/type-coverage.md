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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-coverage.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/type-coverage.html","name":"Type Coverage","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Type coverage reports how much of the PHP code has types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Type Coverage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Type System](type.ini.html)
+ [Coverage](coverage.ini.html)
+ [Analysis](analysis.ini.html)
+ [Type Checking](type-checking.ini.html)
+ [Type Inference](type-inference.ini.html)

## Related packages

+ [tomasvotruba/type-coverage](https://packagist.org/packages/tomasvotruba/type-coverage)
