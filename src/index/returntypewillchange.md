# Return Type Will Change
This is a native PHP attribute. It tells the engine that method overwriting or implementing a native method will use a different return type.

PHP checks the compatibility of implementing methods versus a custom interface. Until PHP 8.1, it did not report such violation when the interface is a PHP native one: this was for backward compatibility.

To avoid using that attribute, one must made the return type compatible with PHP signatures.

This attributes only works with PHP native methods: it is ignored when used with other methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/returntypewillchange.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/returntypewillchange.html","name":"Return Type Will Change","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"This is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Return Type Will Change.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class Foo implements ArrayAccess {
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset) {}
    // ...
}

?>
```

**[Documentation](https://php.watch/versions/8.1/ReturnTypeWillChange)**
## Related

+ [PHP Native Attribute](php-native-attribute.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)
