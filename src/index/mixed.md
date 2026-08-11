# Mixed
A special type that represents any available type. It is equivalent to not explicitly setting the type, though it is now explicitly done. 

A ``mixed`` type may be also represented by a union of all possible types. 

``mixed`` is useful when literally any type should be supported, such as with a cache system. Yet, it is usually recommended to consider reducing the number of possible types by using a common interface or a union type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixed.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixed.html","name":"Mixed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 06:40:05 +0000","dateModified":"Thu, 02 Jul 2026 06:40:05 +0000","description":"A special type that represents any available type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Mixed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mixed"}]}]}</script>
```php
<?php

    function cache(string $name, mixed $value) : bool {
        static $cache = [];
        
        $cache[$name] = $value;
        
        return true;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.mixed)**
## See Also

+ [Mixed Type PHP 8](https://www.amitmerchant.com/mixed-type-php8/)
+ [A mixed type PHPStan journey](https://staabm.github.io/2024/11/26/phpstan-mixed-types.html)
+ [Why `mixed` Is the Worst Type in Your PHP Codebase (and How to Kill It)](https://dev.to/gabrielanhaia/why-mixed-is-the-worst-type-in-your-php-codebase-and-how-to-kill-it-3ie)

## Related

+ [Type System](type.html)
+ [Pseudo-type](pseudo-type.html)
+ [Special Types](special-typehint.html)
+ [Type Inference](type-inference.html)
+ [Wildcard](wildcard.html)
