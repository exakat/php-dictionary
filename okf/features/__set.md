---
type: "magic method"
title: "__set() Method"
description: "``__set()`` is a magic method: it is called when writing data to inaccessible, either protected or private, or non-existing properties."
resource: "https://www.php.net/manual/en/language.oop5.magic.php"
tags: ["magic method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __set() Method

``__set()`` is a magic method: it is called when writing data to inaccessible, either protected or private, or non-existing properties. It is used to give a value to the property.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__set()`` method is usually paired with the ``__get()`` method.

The method signature is ``public function __set(string $name, mixed $value): void``. The ``$name`` argument is the name of the property being interacted with. The ``$value`` argument specifies the value the ``$name``-ed property should be set to. The return value of ``__set()`` is ignored because of the way PHP processes the assignment operator. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context.

```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        // Checks the dictionary, or return 0
        function __set($name, $value) {
            if (isset($this->values[$name])) {
                $this->values[$name] = $value;
            }
            
            //do not set new values
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.magic.php](https://www.php.net/manual/en/language.oop5.magic.php)

## See Also
- [PHP’s magic methods: Invoke, toString, get, set – Class wizardry in a nutshell](https://www.dinocajic.com/built-in-functions-invoke-tostring-get-set/)
- [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related
- [__get() Method](/features/__get.md)
- [__isset() Method](/features/__isset.md)
- [Magic Constants](/features/magic-constant.md)
- [__unset() Method](/features/__unset.md)
- [Magic Methods](/features/magic-method.md)
- [Magic Property](/features/magic-property.md)
- [Property Hook](/features/property-hook.md)

