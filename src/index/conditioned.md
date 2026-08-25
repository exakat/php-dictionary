# Conditioned Structures
Conditioned structures are definitions that are placed inside a condition structure. 

For example, it is possible to create a function or a class, only if it doesn't exist. 

Classes, traits, interfaces, global constants, with ``define()``, enumerations, functions may be conditioned. 

Class constants, properties, methods and cases, for ``enum``, cannot be conditioned.

Conditioned structures adapt the PHP context to external condition. For example, some function may become native after a specific PHP version, and is only redefined for older installation. 

Some structures do not accept condition, such as global constants with ``const`` keyword. With ``define()`` function, it is OK.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditioned.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditioned.html","name":"Conditioned Structures","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 12:17:01 +0000","dateModified":"Tue, 25 Aug 2026 12:17:01 +0000","description":"Conditioned structures are definitions that are placed inside a condition structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditioned.html"]}],"keywords":["feature","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Conditional_(computer_programming)"},{"@type":"CreativeWork","name":"PHP: Control Structures","url":"https:\/\/www.php.net\/manual\/en\/language.control-structures.php"},{"@type":"CreativeWork","name":"PHP: The if Statement","url":"https:\/\/www.php.net\/manual\/en\/control-structures.if.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"conditioned"}]}]}</script>
```php
<?php

if (!function_exists('foo')) {
    function foo() {
        // doSomething
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Conditional_(computer_programming))**
## See Also

+ [PHP: Control Structures](https://www.php.net/manual/en/language.control-structures.php)
+ [PHP: The if Statement](https://www.php.net/manual/en/control-structures.if.php)

## Related

+ [Const](const.html)
+ [define()](define.html)
