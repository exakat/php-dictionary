# defined()
``defined()`` checks if a constant or a class constant is defined in the current context of execution. 

``defined()`` is a function, and may be called on any piece of string. true is returned when the string is a valid name of a constant, and a value for it was found. Otherwise, it returns false, without error.

``defined()`` doesn't take into account the ``use const`` expressions: it should be a fully qualified constant name, or a relative one.

``defined()`` is a native function.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defined.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defined.html","name":"defined()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:38:17 +0000","dateModified":"Mon, 17 Aug 2026 09:38:17 +0000","description":"defined() checks if a constant or a class constant is defined in the current context of execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defined.html"]}],"keywords":["constant","native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.alternative-syntax.php"},{"@type":"CreativeWork","name":"PHP Constants","url":"https:\/\/www.w3schools.com\/php\/php_constants.asp"},{"@type":"CreativeWork","name":"define","url":"https:\/\/www.php.net\/manual\/en\/function.define.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"defined"}]}]}</script>
```php
<?php

    var_dump(defined('UNKNOWN'));         // false
    var_dump(defined('Not a constant'));  // false
    var_dump(defined('E_ALL'));           // true
    var_dump(defined('\E_ALL'));          // truet
    
    // use expression are not handled
    use const E_ALL as E;
    var_dump(defined('\E'));               // false

    // with class constants
    class E { const E = 1; }
    var_dump(defined('E'));                // false
    var_dump(defined('E::E'));             // true

    // do not confuse the constant and its value
    const F = 'E';
    var_dump(defined(F));                  // false

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.alternative-syntax.php)**
## See Also

+ [PHP Constants](https://www.w3schools.com/php/php_constants.asp)
+ [define](https://www.php.net/manual/en/function.define.php)

## Related

+ [Class Constant Syntax](class-constant-syntax.html)
+ [Const](const.html)
+ [define()](define.html)
+ [Existence](existence.html)
