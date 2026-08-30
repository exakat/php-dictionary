---
type: "magic method"
title: "__unset() Method"
description: "``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property."
resource: "https://www.php.net/manual/en/language.oop5.magic.php"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __unset() Method

``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property. That way, it is possible to remove dynamically properties. Hardcoded properties are reset to their default state, and do not call this magic method.

The ``__unset()`` method is usually paired with the ``__isset()`` and ``__set()`` methods.

```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        function __unset($name) {
            unset($this->values[$name]);
        }
    
        function __isset($name) {
            return isset($this->values[$name]);
        }
    
        function __set($name, $value) {
            $this->values[$name] = $value;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php](https://www.php.net/manual/en/language.oop5.magic.php)

## See Also
- [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related
- [__set() Method](/features/__set.md)
- [__isset() Method](/features/__isset.md)
- [Magic Constants](/features/magic-constant.md)
- [Magic Property](/features/magic-property.md)

