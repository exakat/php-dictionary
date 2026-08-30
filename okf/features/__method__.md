---
type: "PHP Feature"
title: "__METHOD__"
description: "``__METHOD__`` holds the current method or function name."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __METHOD__

``__METHOD__`` holds the current method or function name.

The method name includes the namespace and the class it was declared in, e.g. ``N\X::foo``. It also uses the definition's case.

When used inside a method, ``__METHOD__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.

```php
<?php

    function foo() {
        echo __METHOD__; // foo
    }
    
    function GOO() {
        echo __method__; // GOO
    }
    
    class X {
        function foo() {
            echo __METHOD__; // foo
        }
    }
    
    foo();
    (new X)->foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [Magic Methods and Predefined Constants in PHP](https://www.sitepoint.com/magic-methods-and-predefined-constants-in-php/)
- [PHP - Magic Constants - Tutorialspoint](https://www.tutorialspoint.com/php/php_magic_constants.htm)

## Related
- [Magic Constants](/features/magic-constant.md)
- [__FILE__](/features/__file__.md)
- [__CLASS__](/features/__class__.md)
- [__FUNCTION__](/features/__function__.md)
- [__TRAIT__](/features/__trait__.md)

