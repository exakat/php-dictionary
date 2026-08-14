# Snake Case
Snake case, also written ``snake_case`` is a way of writing names without spaces, where:

+ All the letters are set to lower case
+ Each word is separated from the other by an underscore

The underscore letters create ``humps`` like a camel's back: this is the origin of the name.

Snake case is often used for PHP native functions. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snake-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snake-case.html","name":"Snake Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:09:32 +0000","dateModified":"Thu, 09 Jul 2026 09:09:32 +0000","description":"Snake case, also written snake_case is a way of writing names without spaces, where:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Snake Case.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"snake-case"}]}]}</script>
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

+ [Pascal Case](pascal-case.html)
+ [Camel Case](camel-case.html)
+ [Constant Case](constant-case.html)
+ [Underscore](underscore.html)
