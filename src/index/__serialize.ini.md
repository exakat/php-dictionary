# \_\_serialize() Method
The ``__serialize()`` method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object. 

When no array is returned, a ``TypeError`` is thrown.

``__serialize()`` is a magic method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__serialize.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__serialize.ini.html","name":"__serialize() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:42:47 +0000","dateModified":"Mon, 03 Aug 2026 16:42:47 +0000","description":"The ``__serialize()`` method is called when a script tries to construct an associative array of key\/value pairs that represent the serialized form of the object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__serialize() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class WebPage {
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

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.serialize)**
## See Also

+ [Serializing Data In PHP](https://www.phparch.com/2023/02/serializing-data-in-php/)

## Related

+ [Unserialization](unserialize.ini.html)
+ [\_\_unserialize() Method](__unserialize.ini.html)
+ [Serialization](serialization.ini.html)
+ [Serialization](serialize.ini.html)
+ [Unserialization](unserialization.ini.html)
