# Backed Enum
Backed enums are enumeration which a string or integer equivalent for each of its cases. Each equivalent, like the cases names, must be distinct. They also must be of the type of the backed enumeration: not type juggling on numeric strings or integers happens.

Non backed enumerations are called unbacked enumerations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backed-enum.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backed-enum.ini.html","name":"Backed Enum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Backed enums are enumeration which a string or integer equivalent for each of its cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Backed Enum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

enum Suits: string {
    case HEART = 'heart';
    case CLUB = 'club';
    case DIAMOND = 'diamond';
    case SPADE = 'spade';
}

enum Prime_digits: int {
    case TWO = 2;
    case THREE = 3;
    case FIVE = 5;
    case SEVEN = 7;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.enumerations.php)**
## See Also

+ [Using PHP Backed Enums in Laravel with Testing](https://dev.to/tegos/using-php-backed-enums-in-laravel-with-testing-1f6)

## Related

+ [Enumeration (enum)](enum.ini.html)
+ [Unbacked Enum](unbacked-enum.ini.html)
+ [Backed](backed.ini.html)
+ [http\_build\_query()](http_build_query.ini.html)
