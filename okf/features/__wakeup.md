---
type: "magic method"
title: "__wakeup() Method"
description: "``__wakeup()`` is a magic method: it is called when an object is being deserialized, so that the object may be restored to its working condition."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#object.sleep"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __wakeup() Method

``__wakeup()`` is a magic method: it is called when an object is being deserialized, so that the object may be restored to its working condition. 

In particular, some resources, such as database connections or files cannot be serialized. They should be closed, stored as a path in ``__sleep()``, and reopened later with ``__wakeup()``.

The ``__wakeup()`` method is usually paired with the ``__sleep()`` method.

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#object.sleep](https://www.php.net/manual/en/language.oop5.magic.php#object.sleep)

## See Also
- [PHP __sleep And __wakeup Magic Methods: How And When To Use Them?](https://medium.com/@lukaspereyra8/php-sleep-and-wakeup-magic-methods-how-and-when-to-use-them-938591584bdcbb)
- [__sleep() and __wakeup()](https://riptutorial.com/php/example/4604/--sleep---and---wakeup--)

## Related
- [Magic Methods](/features/magic-method.md)
- [__sleep() Method](/features/__sleep.md)
- [Insecure Deserialization](/features/insecure-deserialization.md)

