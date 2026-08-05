# \_\_wakeup() Method
``__wakeup()`` is a magic method: it is called when an object is being deserialized, so that the object may be restored to its working condition. 

In particular, some resources, such as database connections or files cannot be serialized. They should be closed, stored as a path in ``__sleep()``, and reopened later with ``__wakeup()``.

The ``__wakeup()`` method is usually paired with the ``__sleep()`` method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__wakeup.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__wakeup.ini.html","name":"__wakeup() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:49:51 +0000","dateModified":"Wed, 05 Aug 2026 08:49:51 +0000","description":"``__wakeup()`` is a magic method: it is called when an object is being deserialized, so that the object may be restored to its working condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__wakeup() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        private $file;
        private $path;

        function __sleep() {
            fclose($this->file);
            return ['path'];
        }

        function __wakeup() {
            $this->file = fopen($this->path, 'r');
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#object.sleep)**
## See Also

+ [PHP __sleep And __wakeup Magic Methods: How And When To Use Them?](https://medium.com/@lukaspereyra8/php-sleep-and-wakeup-magic-methods-how-and-when-to-use-them-938591584bdcbb)
+ [__sleep() and __wakeup()](https://riptutorial.com/php/example/4604/--sleep---and---wakeup--)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [\_\_sleep() Method](__sleep.ini.html)
+ [Insecure Deserialization](insecure-deserialization.ini.html)
