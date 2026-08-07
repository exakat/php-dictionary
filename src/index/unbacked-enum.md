# Unbacked Enum
Unbacked enums are enumeration without a string or integer equivalent for each of its cases.

Unbacked enums are the default cases, and are implied when not mentioned. The opposite is backed enum.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unbacked-enum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unbacked-enum.html","name":"Unbacked Enum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:07:14 +0000","dateModified":"Thu, 09 Jul 2026 09:07:14 +0000","description":"Unbacked enums are enumeration without a string or integer equivalent for each of its cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Unbacked Enum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Unbacked Enum"}]}]}</script>
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

+ [Enumeration (enum)](enum.html)
+ [Backed Enum](backed-enum.html)
+ [BackedEnum](backedenum.html)
