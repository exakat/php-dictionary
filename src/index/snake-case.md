# Snake Case
Snake case, also written ``snake_case`` is a way of writing names without spaces, where:

+ All the letters are set to lower case
+ Each word is separated from the other by an underscore

The underscore letters create ``humps`` like a camel's back: this is the origin of the name.

Snake case is often used for PHP native functions. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/snake-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/snake-case.html","name":"Snake Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:09:32 +0000","dateModified":"Thu, 09 Jul 2026 09:09:32 +0000","description":"Snake case, also written ``snake_case`` is a way of writing names without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Snake Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function to_lower(string $string): int {
        // PHP native function
        return mb_strtolower($string);
    }

?>
```

**[Documentation](https://stringcase.org/cases/snake/)**
## See Also

+ [stringcase website](https://stringcase.org/)

## Related

+ [Pascal Case](pascal-case.ini.html)
+ [Camel Case](camel-case.ini.html)
+ [Constant Case](constant-case.ini.html)
+ [Underscore](underscore.ini.html)
