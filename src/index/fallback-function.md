# Fallback Function
A fallback function is a function that replaces a function if its definition is not available in the current namespace. 

PHP has implemented a mechanism so that functions that are undefined in the current namespace, have a fallback in the global space. This is important for backward compatibility, and the native PHP versions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallback-function.html","name":"Fallback Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 15:43:05 +0000","dateModified":"Mon, 10 Aug 2026 15:43:05 +0000","description":"A fallback function is a function that replaces a function if its definition is not available in the current namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fallback Function.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fallback-function"}]}]}</script>
```php
<?php

    namespace A {
        // A\strtolower doesn't exist, 
        // it falls back on \strtolower(), in the global space
        echo strtolower('A');
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.fallback.php)**
## See Also

+ [Function Arguments in PHP: Optional Parameters and Default Values](https://oatllo.com/course/php/function/php-function-arguments-guide)

## Related

+ [Functions](function.html)
+ [Fallback](fallback.html)
