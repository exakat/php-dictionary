# \_\_sleep() Method
``__sleep()`` is a magic method: it is called when an object is being serialized, so that the object may be cleaned. 

In particular, some resources, such as database connections or files cannot be serialized. They should be closed, stored as a path, and reopened later with ``__wakeup()``.

The ``__sleep()`` method is usually paired with the ``__wakeup()`` method.

``__sleep()`` must return an array listing, as strings, the names of the properties that should be serialized. Any property left out of that array is discarded, and reset to its default value once the object is unserialized.

If ``__sleep()`` does not return an array, PHP emits a warning and ``null`` is serialized instead of the object's properties.

``__sleep()`` cannot return the names of private properties declared in a parent class: doing so raises a notice. ``__serialize()`` and ``__unserialize()`` should be used instead when finer control over the serialized data, or access to inherited private properties, is needed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__sleep.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__sleep.html","name":"__sleep() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``__sleep()`` is a magic method: it is called when an object is being serialized, so that the object may be cleaned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__sleep() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__sleep"}]}]}</script>
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

+ [PHP __sleep And __wakeup Magic Methods: How And When To Use Them?](https://medium.com/@lukaspereyra8/php-sleep-and-wakeup-magic-methods-how-and-when-to-use-them-938591584bdc)
+ [__sleep() and __wakeup()](https://riptutorial.com/php/example/4604/--sleep---and---wakeup--)
+ [PHP’s __sleep() and __wakeup() Magic Methods for Serialization!](https://dev.to/info_generalhazedawn_a3d/phps-sleep-and-wakeup-magic-methods-for-serialization--5711)

## Related

+ [Magic Methods](magic-method.html)
+ [\_\_wakeup() Method](__wakeup.html)
+ [Serialization](serialize.html)
