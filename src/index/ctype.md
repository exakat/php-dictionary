# Ctype
``ctype`` is a set of functions used for character type checking. These functions are primarily designed to determine the type of characters in a string. They are useful for tasks such as input validation, data processing, and character manipulation. The ctype functions are part of PHP's standard library.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ctype.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ctype.html","name":"Ctype","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:38:30 +0000","dateModified":"Mon, 17 Aug 2026 09:38:30 +0000","description":"ctype is a set of functions used for character type checking","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ctype.html"]}],"keywords":["core"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filter.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.ctype.php"},{"@type":"CreativeWork","name":"An Introduction to Ctype Functions","url":"https:\/\/www.sitepoint.com\/an-introduction-to-ctype-functions\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ctype"}]}]}</script>
```php
<?php

    $strings = ['KjgWZC', 'arf12'];
    foreach ($strings as $testcase) {
        if (ctype_alpha($testcase)) {
            echo "The string $testcase consists of all letters.\n";
        } else {
            echo "The string $testcase does not consist of all letters.\n";
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/book.ctype.php)**
## See Also

+ [An Introduction to Ctype Functions](https://www.sitepoint.com/an-introduction-to-ctype-functions/)

## Related

+ [filter](filter.html)
