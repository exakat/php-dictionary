# Typed Property
A typed property has a type in its definition. 

Typed property may have a default value, although it must be compatible with the specified type. Typed properties cannot have a default values when they are typed with an object type.

The type applies all the time: unlike the parameter's type, any usage of the property must be compatible with the type.

Typed properties may be static or not.

Typed properties are a base for ``readonly`` and asymmetric visibility.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typed-property.html","name":"Typed Property","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:43 +0000","dateModified":"Mon, 10 Aug 2026 16:53:43 +0000","description":"A typed property has a type in its definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Typed Property.html"]}],"keywords":["type","property"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.properties.php"},{"@type":"CreativeWork","name":"PHP RFC: Typed Properties 2.0","url":"https:\/\/wiki.php.net\/rfc\/typed_properties_v2"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"typed-property"}]}]}</script>
```php
<?php

class X {
    private int $i = 1;
    
    private readonly float $y;
    
    public static string $s;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.properties.php)**
## See Also

+ [PHP RFC: Typed Properties 2.0](https://wiki.php.net/rfc/typed_properties_v2)

## Related

+ [Properties](property.html)
+ [Type System](type.html)
