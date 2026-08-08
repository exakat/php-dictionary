# \_\_unserialize() Method
The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key/value pairs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html","name":"__unserialize() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key\/value pairs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"__unserialize() Method"}]}]}</script>
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
