# Assertions
Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production. 

Assertions are disabled in production, by using the ``zend.assertions`` directive. Then, they are said zero-cost: they are completely omitted in the code, and not executed.

Assertions are a development tool, and should not be used in production. Be aware that the removal of the assertion may leave the system running with unchecked data. 

There are packages providing assertions features and more.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/assertion.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/assertion.ini.html","name":"Assertions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Assertions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = foo();
    assert($a !== null, 'Sorry, we got a NULL from foo()!');

?>
```

**[Documentation](https://www.php.net/manual/en/function.assert.php)**
## See Also

+ [PHP assertions and their usage](https://www.exakat.io/en/php-assertions-usage/)
+ [Assertions in PHP](https://aleksandertabor.com/blog/assertions-in-php/)
+ [Assertion101 Proving Grounds Walkthrough](https://infosecwriteups.com/assertion101-proving-grounds-walkthrough-intermediate-complete-write-up-0dc4b987dd31)

## Related

+ [zend\\.assertions](zend-assertions.ini.html)
+ [Zero Cost](zero-cost.ini.html)
+ [Assumption](assumption.ini.html)
+ [Runtime Checks](runtime-checks.ini.html)

## Related packages

+ [webmozart/assert](https://packagist.org/packages/webmozart/assert)
+ [beberlei/assert](https://packagist.org/packages/beberlei/assert)
