# __sleep() Method
``__sleep()`` is a magic method: it is called when an object is being serialized, so that the object may be cleaned. 

In particular, some resources, such as database connections or files cannot be serialized. They should be closed, stored as a path, and reopened later with ``__wakeup()``.

The ``__sleep()`` method is usually paired with the ``__wakeup()`` method.

``__sleep()`` must return an array listing, as strings, the names of the properties that should be serialized. Any property left out of that array is discarded, and reset to its default value once the object is unserialized.

If ``__sleep()`` does not return an array, PHP emits a warning and ``null`` is serialized instead of the object's properties.

``__sleep()`` cannot return the names of private properties declared in a parent class: doing so raises a notice. ``__serialize()`` and ``__unserialize()`` should be used instead when finer control over the serialized data, or access to inherited private properties, is needed.
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

## See Also

+ [PHP __sleep And __wakeup Magic Methods: How And When To Use Them?](https://medium.com/@lukaspereyra8/php-sleep-and-wakeup-magic-methods-how-and-when-to-use-them-938591584bdc)
+ [__sleep() and __wakeup()](https://riptutorial.com/php/example/4604/--sleep---and---wakeup--)
+ [PHP’s __sleep() and __wakeup() Magic Methods for Serialization!](https://dev.to/info_generalhazedawn_a3d/phps-sleep-and-wakeup-magic-methods-for-serialization--5711)

Related : [Magic Methods](Magic Methods), [__wakeup() Method](__wakeup() Method), [Serialization](Serialization)
