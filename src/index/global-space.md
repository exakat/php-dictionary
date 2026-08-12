# Global Space
The term ``global space`` refers to the global namespace ``\\\\`` or the top-level scope in the PHP language. The global space is where global variables, functions, and global constants reside. When a variable, function, or constant is defined without specifying a namespace, it is stored in the global space.

It is recommended to avoid using the global space for any definition: they should be stored in a custom namespace. Then, they may be imported in other namespaces, with the ``use`` expression.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-space.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-space.html","name":"Global Space","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:33 +0000","dateModified":"Wed, 05 Aug 2026 08:17:33 +0000","description":"The term global space refers to the global namespace \\\\\\\\ or the top-level scope in the PHP language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Global Space.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"global-space"}]}]}</script>
```php
<?php

// This is the global space
namespace {
    // this function is defined in the global space
    function foo() {} 
} 

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.global.php)**
## See Also

+ [PHP Namespace: An Essential Guide By Examples](https://www.phptutorial.net/php-oop/php-namespace/)
+ [Global Namespaces and Fallback rules in PHP](https://blog.eduonix.com/2014/12/global-namespace-and-fallback-rules-in-php/)

## Related

+ [Use Alias](use-alias.html)
+ [Import](import.html)
