# Backed
A backed structure has several meanings: 

+ Backed enumeration: an enumeration that has an integer or string value
+ Backed property: a property with a hook, that actually stores the value in the property.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed.html","name":"Backed","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:11 +0000","dateModified":"Thu, 20 Aug 2026 07:35:11 +0000","description":"A backed structure has several meanings: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Backed.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backed-property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.enumerations.backed.php"},{"@type":"CreativeWork","name":"PHP enums: backed vs unit enums with examples","url":"https:\/\/benjamincrozat.com\/php-enums"},{"@type":"CreativeWork","name":"What Are Backed Enums in PHP?","url":"https:\/\/www.designcise.com\/web\/tutorial\/what-are-backed-enums-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backed"}]}]}</script>
```php
<?php

    enum E : int {
        case A = 1;
    }
    
    class X {
        private $p { get => $this->p;}
    }
    
?>
```

**[Documentation](https://www.php.net/manual/en/language.enumerations.backed.php)**
## See Also

+ [PHP enums: backed vs unit enums with examples](https://benjamincrozat.com/php-enums)
+ [What Are Backed Enums in PHP?](https://www.designcise.com/web/tutorial/what-are-backed-enums-in-php)

## Related

+ [Backed Enum](backed-enum.html)
+ [Backed Property](backed-property.html)
