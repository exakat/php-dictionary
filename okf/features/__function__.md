---
type: "PHP Feature"
title: "__FUNCTION__"
description: "``__FUNCTION__`` holds the current function or method name."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __FUNCTION__

``__FUNCTION__`` holds the current function or method name.

The function name includes the namespace it was declared in, e.g. ``N\X\foo``. It also uses the definition's case.

When used inside a method, ``__FUNCTION__`` is the name of the method it is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

``__METHOD__`` and ``__FUNCTION__`` are almost identical.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.

```php
<?php

    function foo() {
        echo __FUNCTION__; // foo
    }
    
    function GOO() {
        echo __function__; // GOO
    }
    
    class X {
        function foo() {
            echo __FUNCTION__; // foo
        }
    }
    
    foo();
    (new X)->foo();

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [PHP Magic Constants - W3Schools](https://www.w3schools.com/php/php_magic_constants.asp)
- [Magic Constants in PHP - Scientech Easy](https://www.scientecheasy.com/2024/09/magic-constants-in-php.html/)

## Related
- [Magic Constants](/features/magic-constant.md)
- [__METHOD__](/features/__method__.md)
- [__CLASS__](/features/__class__.md)
- [__TRAIT__](/features/__trait__.md)

