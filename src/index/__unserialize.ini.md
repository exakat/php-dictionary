# \_\_unserialize() Method
The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key/value pairs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__unserialize.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__unserialize.ini.html","name":"__unserialize() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:41:39 +0000","dateModified":"Mon, 03 Aug 2026 16:41:39 +0000","description":"The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key\/value pairs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__unserialize() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Unserialization](unserialize.ini.html)
+ [Serialization](serialize.ini.html)
+ [\_\_serialize() Method](__serialize.ini.html)
+ [Insecure Deserialization](insecure-deserialization.ini.html)
+ [Serialization](serialization.ini.html)
