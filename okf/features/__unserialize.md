---
type: "magic method"
title: "__unserialize() Method"
description: "The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key/value pairs."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.unserialize"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __unserialize() Method

The ``__unserialize()`` magic method is called when a script tries to construct an object from an associative array of key/value pairs.

``__unserialize()`` was introduced in version 7.4, as the modern replacement for the ``Serializable`` interface. It is called by ``unserialize()`` on a freshly created, uninitialized instance of the class, receiving as its only argument the array that was returned by ``__serialize()`` at the time the object was serialized. The method is responsible for reading that array and restoring every property to its former value.

Unlike the older ``Serializable::unserialize()``, ``__unserialize()`` works with a plain PHP array instead of a raw string, so there is no need to handle a custom string format by hand. It is meant to be used together with ``__serialize()``: if a class defines one of the two magic methods, it should define the other. When neither is present, PHP falls back to serializing the object's properties directly, including private and protected ones, which is also what ``__wakeup()`` and ``__sleep()`` used to control before the magic methods were introduced.

Because ``unserialize()`` can be called on untrusted input, most notably user-supplied cookies, session data or request payloads, the code inside ``__unserialize()`` should validate the incoming array carefully. A crafted array which does not match the expected shape may otherwise be used to build objects in an unexpected state, which is the basis of PHP object injection and insecure deserialization attacks.

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.unserialize](https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.unserialize)

## See Also
- [How to use serialize() and unserialize() Function in PHP?](https://www.geeksforgeeks.org/php/how-to-use-php-serialize-and-unserialize-function/)

## Related
- [Unserialization](/features/unserialize.md)
- [__serialize() Method](/features/__serialize.md)
- [Insecure Deserialization](/features/insecure-deserialization.md)
- [Serialization](/features/serialization.md)

