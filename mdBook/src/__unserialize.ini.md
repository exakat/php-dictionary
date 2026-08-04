# __unserialize() Method
The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key/value pairs.
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

## See Also

+ [How to use serialize() and unserialize() Function in PHP?](https://www.geeksforgeeks.org/php/how-to-use-php-serialize-and-unserialize-function/)

Related : [Unserialization](Unserialization), [Serialization](Serialization), [__serialize() Method](__serialize() Method), [Insecure Deserialization](Insecure Deserialization), [Serialization](Serialization)
