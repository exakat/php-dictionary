# Zero Cost
``zero cost`` most commonly refers to zero-cost assertions, a feature introduced in version 7.0.

Zero cost assertions means that they can be turned off, and do not add any execution penalty. 

Until PHP 7.0, assertions could be switched off, but their parsing and non-execution would still require some condition checks. Since PHP 7.0, disabled assertions are not even compiled into bytecode: they are completely removed from the code.

Zero-cost is associated with compiled languages, which are able to remove such code at compile time, with the correction options, debug or not. 

Some PHP packages and applications claim to be zero-cost. They are using some well place execution to reduce the impact on the execution time, like ``Kphp``, which compiles to C++ a subset of PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero-cost.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero-cost.html","name":"Zero Cost","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:40:48 +0000","dateModified":"Fri, 24 Jul 2026 15:40:48 +0000","description":"zero cost most commonly refers to zero-cost assertions, a feature introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Zero Cost.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"zero-cost"}]}]}</script>
```php
<?php

    assert($a !== 0, '$a must not be zero.');

?>
```

**[Documentation](https://www.php.net/manual/en/function.assert.php)**
## See Also

+ [kphp](https://vkcom.github.io/kphp/)

## Related

+ [Assertions](assertion.html)

## Related packages

+ [olvlvl/composer-attribute-collector](https://packagist.org/packages/olvlvl/composer-attribute-collector)
