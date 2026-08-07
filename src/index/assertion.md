# Assertions
Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production. 

Assertions are disabled in production, by using the ``zend.assertions`` directive. Then, they are said zero-cost: they are completely omitted in the code, and not executed.

Assertions are a development tool, and should not be used in production. Be aware that the removal of the assertion may leave the system running with unchecked data. 

There are packages providing assertions features and more.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html","name":"Assertions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Assertions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Assertions"}]}]}</script>
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

+ [zend\\.assertions](zend-assertions.html)
+ [Zero Cost](zero-cost.html)
+ [Assumption](assumption.html)
+ [Runtime Checks](runtime-checks.html)

## Related packages

+ [webmozart/assert](https://packagist.org/packages/webmozart/assert)
+ [beberlei/assert](https://packagist.org/packages/beberlei/assert)
