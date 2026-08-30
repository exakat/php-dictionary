---
type: "magic method"
title: "__set_state() Method"
description: "``__set_state()`` is a magic method: it is called when an object has been exported with ``var_export()``, and has to be instantiated again."
resource: "https://www.php.net/manual/en/language.oop5.magic.php#object.set-state"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __set_state() Method

``__set_state()`` is a magic method: it is called when an object has been exported with ``var_export()``, and has to be instantiated again. 

``__set_state()`` is tasked with recreating the object, assigning the previous values to it, and recreating any missing properties, such as database connections or resources.

The ``__set_state()`` method has no counterpart: ``var_export()`` does not use any magic method.

``__set_state()`` is a static method, unlike the other magic methods.

```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        // Checks the dictionary, or return 0
        public static function __set_state($array) {
            $object = new self();
    
            // This takes advantage of PHP object invasion
            $object->values['a'] = $array['a'] ?? '0';
            $object->values['b'] = $array['b'] ?? '0';
            
            return $object;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php#object.set-state](https://www.php.net/manual/en/language.oop5.magic.php#object.set-state)

## See Also
- [The Magic __set_state Method](https://www.softcoded.com/articles/set_state.php)

## Related
- [Magic Methods](/features/magic-method.md)
- [Object Invasion](/features/object-invasion.md)

