# __serialize() Method
The ``__serialize()`` method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object. 

When no array is returned, a ``TypeError`` is thrown.

``__serialize()`` is a magic method.
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

## See Also

+ [Serializing Data In PHP](https://www.phparch.com/2023/02/serializing-data-in-php/)

Related : [Unserialization](Unserialization), [__unserialize() Method](__unserialize() Method), [Serialization](Serialization), [Serialization](Serialization), [Unserialization](Unserialization)
