# Typed Property
A typed property has a type in its definition. 

Typed property may have a default value, although it must be compatible with the specified type. Typed properties cannot have a default values when they are typed with an object type.

The type applies all the time: unlike the parameter's type, any usage of the property must be compatible with the type.

Typed properties may be static or not.

Typed properties are a base for ``readonly`` and asymmetric visibility.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/typed-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/typed-property.ini.html","name":"Typed Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:49 +0000","dateModified":"Fri, 19 Jun 2026 21:24:49 +0000","description":"A typed property has a type in its definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Typed Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Properties](property.ini.html)
+ [Type System](type.ini.html)
