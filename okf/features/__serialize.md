---
type: "magic method"
title: "__serialize() Method"
description: "The ``__serialize()`` method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.serialize"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.serialize](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.serialize)

## See Also
- [Serializing Data In PHP](https://www.phparch.com/2023/02/serializing-data-in-php/)

## Related
- [Unserialization](/features/unserialize.md)
- [__unserialize() Method](/features/__unserialize.md)
- [Serialization](/features/serialization.md)

