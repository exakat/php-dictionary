# Backed Property
A backed property is a property with a hook, that actually uses the eponymous property to store the value.

The opposite of a backed property is a virtual property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backed-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backed-property.html","name":"Backed Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A backed property is a property with a hook, that actually uses the eponymous property to store the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Backed Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    public $p { get => $this->p; }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.property-hooks.php)**
## Related

+ [Virtual Property](virtual-property.ini.html)
+ [Backed](backed.ini.html)
