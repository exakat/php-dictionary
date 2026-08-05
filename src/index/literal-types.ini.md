# Literal Types
Literal types are type which not only check the type of a value but also the value itself. PHP has support for two literal types: false as of PHP 8.0.0, and true as of PHP 8.2.0.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/literal-types.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/literal-types.ini.html","name":"Literal Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Literal types are type which not only check the type of a value but also the value itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Literal Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // bool is a type
    // false is a literal type : a bool, which value is false
    function foo(bool $a) : false {
        return false;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.string.php)**
## Related

+ [Scalar Types](scalar-type.ini.html)
+ [Union Type](union-type.ini.html)
+ [Relative Types](relative-types.ini.html)
