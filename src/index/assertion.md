# Assertions
Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production. 

Assertions are disabled in production, by using the ``zend.assertions`` directive. Then, they are said zero-cost: they are completely omitted in the code, and not executed.

Assertions are a development tool, and should not be used in production. Be aware that the removal of the assertion may leave the system running with unchecked data. 

There are packages providing assertions features and more.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html","name":"Assertions","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html"]}],"alternateName":["assert"],"keywords":["feature","code option"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zend-assertions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero-cost.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assumption.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtime-checks.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.assert.php"},{"@type":"CreativeWork","name":"PHP assertions and their usage","url":"https:\/\/www.exakat.io\/en\/php-assertions-usage\/"},{"@type":"CreativeWork","name":"Assertions in PHP","url":"https:\/\/aleksandertabor.com\/blog\/assertions-in-php\/"},{"@type":"CreativeWork","name":"Assertion101 Proving Grounds Walkthrough","url":"https:\/\/infosecwriteups.com\/assertion101-proving-grounds-walkthrough-intermediate-complete-write-up-0dc4b987dd31"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"assertion"}]}]}</script>
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
