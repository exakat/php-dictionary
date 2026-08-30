---
type: "PHP Feature"
title: "defined()"
description: "``defined()`` checks if a constant or a class constant is defined in the current context of execution."
resource: "https://www.php.net/manual/en/control-structures.alternative-syntax.php"
tags: ["constant", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# defined()

``defined()`` checks if a constant or a class constant is defined in the current context of execution. 

``defined()`` is a function, and may be called on any piece of string. true is returned when the string is a valid name of a constant, and a value for it was found. Otherwise, it returns false, without error.

``defined()`` doesn't take into account the ``use const`` expressions: it should be a fully qualified constant name, or a relative one.

``defined()`` is a native function.

```php
<?php

    var_dump(defined('UNKNOWN'));         // false
    var_dump(defined('Not a constant'));  // false
    var_dump(defined('E_ALL'));           // true
    var_dump(defined('\E_ALL'));          // truet
    
    // use expression are not handled
    use const E_ALL as E;
    var_dump(defined('\E'));               // false

    // with class constants
    class E { const E = 1; }
    var_dump(defined('E'));                // false
    var_dump(defined('E::E'));             // true

    // do not confuse the constant and its value
    const F = 'E';
    var_dump(defined(F));                  // false

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.alternative-syntax.php](https://www.php.net/manual/en/control-structures.alternative-syntax.php)

## See Also
- [PHP Constants](https://www.w3schools.com/php/php_constants.asp)
- [define](https://www.php.net/manual/en/function.define.php)

## Related
- [Class Constant Syntax](/features/class-constant-syntax.md)
- [Const](/features/const.md)
- [define()](/features/define.md)
- [Existence](/features/existence.md)

