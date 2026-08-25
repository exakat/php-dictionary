# \_\_unserialize() Method
The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key/value pairs.

``__unserialize()`` was introduced in version 7.4, as the modern replacement for the ``Serializable`` interface. It is called by ``unserialize()`` on a freshly created, uninitialized instance of the class, receiving as its only argument the array that was returned by ``__serialize()`` at the time the object was serialized. The method is responsible for reading that array and restoring every property to its former value.

Unlike the older ``Serializable::unserialize()``, ``__unserialize()`` works with a plain PHP array instead of a raw string, so there is no need to handle a custom string format by hand. It is meant to be used together with ``__serialize()``: if a class defines one of the two magic methods, it should define the other. When neither is present, PHP falls back to serializing the object's properties directly, including private and protected ones, which is also what ``__wakeup()`` and ``__sleep()`` used to control before the magic methods were introduced.

Because ``unserialize()`` can be called on untrusted input, most notably user-supplied cookies, session data or request payloads, the code inside ``__unserialize()`` should validate the incoming array carefully. A crafted array which does not match the expected shape may otherwise be used to build objects in an unexpected state, which is the basis of PHP object injection and insecure deserialization attacks.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html","name":"__unserialize() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:45:27 +0000","dateModified":"Fri, 14 Aug 2026 08:45:27 +0000","description":"The __unserialize() magic method is called when a script tries to construct an object from an associative array of key\/value pairs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__serialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insecure-deserialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php#language.oop5.magic.unserialize"},{"@type":"CreativeWork","name":"How to use serialize() and unserialize() Function in PHP?","url":"https:\/\/www.geeksforgeeks.org\/php\/how-to-use-php-serialize-and-unserialize-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__unserialize"}]}]}</script>
```php
<?php

    class X {
        private $html;
        private $url;

        public function __construct($url) {
            $this->url = $url;
        }

        public function __serialize() {
            return ['url' => $url];
        }

        public function __unserialize($arg) {
            $this->url = $arg['url'];
            $this->html = file_get_contents($this->url);
        }

    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.unserialize)**
## See Also

+ [How to use serialize() and unserialize() Function in PHP?](https://www.geeksforgeeks.org/php/how-to-use-php-serialize-and-unserialize-function/)

## Related

+ [Unserialization](unserialize.html)
+ [Serialization](serialize.html)
+ [\_\_serialize() Method](__serialize.html)
+ [Insecure Deserialization](insecure-deserialization.html)
+ [Serialization](serialization.html)
