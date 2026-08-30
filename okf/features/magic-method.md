---
type: "PHP Feature"
title: "Magic Methods"
description: "Special methods, which provide extended support for PHP features."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["feature", "method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Magic Methods

Special methods, which provide extended support for PHP features.

The magic methods are: ``__call()``, ``__callStatic()``, ``__get()``, ``__set()``, ``__isset()``, ``__unset()``, ``__sleep()``, ``__wakeup()``, ``__toString()``, ``__invoke()``, ``__set_state()``, ``__clone()`` and ``__debugInfo()``.

The constructor and destructor are not considered as magic methods, even though they are reserved.

```php
<?php

class X {
    function __get($name) {
        return $this->$name;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [What are magic methods in PHP? and How to Implement them?](https://www.edureka.co/blog/magic-methods-in-php)
- [PHP Magic Methods Explained](https://atakde.medium.com/php-magic-methods-explained-bac7053c007d)
- [Magic Methods in PHP: Why Programmers Need Magic Too](https://dev.to/ianpatricck/magic-methods-in-php-why-programmers-need-magic-too-2f02)

## Related
- [__get() Method](/features/__get.md)
- [__set() Method](/features/__set.md)
- [__call() Method](/features/__call.md)
- [__isset() Method](/features/__isset.md)
- [__clone() Method](/features/__clone.md)
- [__sleep() Method](/features/__sleep.md)
- [__wakeup() Method](/features/__wakeup.md)
- [__toString() Method](/features/__tostring.md)
- [__invoke() Method](/features/__invoke.md)
- [__set_state() Method](/features/__set_state.md)
- [Dynamic Properties](/features/dynamic-property.md)
- [String](/features/string.md)
- [Deep Clone](/features/deep-clone.md)
- [Isset](/features/isset.md)
- [Magic Constants](/features/magic-constant.md)
- [Magic](/features/magic.md)
- [Object](/features/object.md)
- [Property Hook](/features/property-hook.md)
- [Shallow Clone](/features/shallow-clone.md)
- [__callStatic() Method](/features/__callstatic.md)
- [Invoke](/features/invoke.md)
- [Object Type](/features/object-type.md)
- [Overloading](/features/overloading.md)
- [Automagic](/features/automagic.md)
- [Callbacks](/features/callback.md)

