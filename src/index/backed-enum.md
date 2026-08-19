# Backed Enum
Backed enums are enumeration which a string or integer equivalent for each of its cases. Each equivalent, like the cases names, must be distinct. They also must be of the type of the backed enumeration: not type juggling on numeric strings or integers happens.

Non backed enumerations are called unbacked enumerations.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-enum.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-enum.html","name":"Backed Enum","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Backed enums are enumeration which a string or integer equivalent for each of its cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Backed Enum.html"]}],"keywords":["native interface"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unbacked-enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/http_build_query.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.enumerations.php"},{"@type":"CreativeWork","name":"Using PHP Backed Enums in Laravel with Testing","url":"https:\/\/dev.to\/tegos\/using-php-backed-enums-in-laravel-with-testing-1f6"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backed-enum"}]}]}</script>
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

+ [Enumeration (enum)](enum.html)
+ [Unbacked Enum](unbacked-enum.html)
+ [Backed](backed.html)
+ [http\_build\_query()](http_build_query.html)
