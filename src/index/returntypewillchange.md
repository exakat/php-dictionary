# Return Type Will Change
This is a native PHP attribute. It tells the engine that method overwriting or implementing a native method will use a different return type.

PHP checks the compatibility of implementing methods versus a custom interface. Until PHP 8.1, it did not report such violation when the interface is a PHP native one: this was for backward compatibility.

To avoid using that attribute, one must made the return type compatible with PHP signatures.

This attributes only works with PHP native methods: it is ignored when used with other methods.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/returntypewillchange.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/returntypewillchange.html","name":"Return Type Will Change","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"This is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Return Type Will Change.html"]}],"keywords":["backward compatibility","attribute","php attribute"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-attribute.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/php.watch\/versions\/8.1\/ReturnTypeWillChange"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"returntypewillchange"}]}]}</script>
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

+ [PHP Native Attribute](php-native-attribute.html)
+ [PHP Native Attributes](php-attribute.html)
