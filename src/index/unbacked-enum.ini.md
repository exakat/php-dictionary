# Unbacked Enum
Unbacked enums are enumeration without a string or integer equivalent for each of its cases.

Unbacked enums are the default cases, and are implied when not mentioned. The opposite is backed enum.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unbacked-enum.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unbacked-enum.ini.html","name":"Unbacked Enum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:07:14 +0000","dateModified":"Thu, 09 Jul 2026 09:07:14 +0000","description":"Unbacked enums are enumeration without a string or integer equivalent for each of its cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unbacked Enum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    enum Ecclectic {
        case PHP;
        case ELEPHPANT;
        case SYNTAX_ERROR;
        case SPADE;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.enumerations.php)**
## Related

+ [Enumeration (enum)](enum.ini.html)
+ [Backed Enum](backed-enum.ini.html)
+ [BackedEnum](backedenum.ini.html)
