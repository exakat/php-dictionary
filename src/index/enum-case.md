# Enumeration Case
An Enumeration may have zero or more case definitions, with no maximum. A zero-case enum is syntactically valid, if rather useless.

Cases must have distinct names. Also, these names must be distinct with the constant names, since the syntax to reach them is the same.

Enumeration cases must be distinct: this is enforced by the engine with the unit enumerations, but not with the backed enumeration. It is possible to give identical values to the cases, and this yields an error as soon as the enumeration is loaded by PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum-case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum-case.html","name":"Enumeration Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:28:13 +0000","dateModified":"Sun, 09 Aug 2026 13:28:13 +0000","description":"An Enumeration may have zero or more case definitions, with no maximum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Enumeration Case.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"enum-case"}]}]}</script>
```php
<?php

    enum Suit
    {
        case Hearts;
        case Diamonds;
        case Clubs;
        case Spades;
    }
    
    enum DayOfTheWeek: int
    {
        case Monday = 1;
        case Tuesday = 2;
        case Wednesday = 3;
        case Thursday = 4;
        case Friday = 4;    // This is an error, that lints but won't execute
        case Saturday = 6;
        case Sunday = 7;
        
        const string MONDAY = 'monday'; // constant MUST have distinct names from other constants and cases. 
                                        // names are case sensitive, so this one is valid.
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.enumerations.basics.php)**
## See Also

+ [Enumerations](https://www.php.net/manual/en/language.enumerations.php)
+ [PHP RFC: Enumerations](https://wiki.php.net/rfc/enumerations)
+ [Backed enumerations](https://www.php.net/manual/en/language.enumerations.backed.php)

## Related

+ [Enumeration (enum)](enum.html)
+ [Case](case.html)
+ [Linting](linting.html)
