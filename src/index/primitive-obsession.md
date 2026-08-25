# Primitive Obsession
Primitive Obsession is a bias in the way the code is written. It happens when the code uses too many primitive types, even to represent complex concepts.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primitive-obsession.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primitive-obsession.html","name":"Primitive Obsession","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:33 +0000","dateModified":"Tue, 11 Aug 2026 21:00:33 +0000","description":"Primitive Obsession is a bias in the way the code is written","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/primitive-obsession.html"]}],"keywords":["code smell"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/medium.com\/@alt.wibbing\/primitive-obsession-the-anti-pattern-6339efb82c87"},{"@type":"CreativeWork","name":"Primitive Obsession","url":"https:\/\/refactoring.guru\/smells\/primitive-obsession"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"primitive-obsession"}]}]}</script>
```php
<?php

class Person
{
    public string $id;

    public string $firstName;
    public string $lastName;

    public string $address;
    public string $postCode;
    public string $city;
    public string $country;
}

?>
```

**[Documentation](https://medium.com/@alt.wibbing/primitive-obsession-the-anti-pattern-6339efb82c87)**
## See Also

+ [Primitive Obsession](https://refactoring.guru/smells/primitive-obsession)

## Related

+ [Scalar Types](scalar-type.html)
