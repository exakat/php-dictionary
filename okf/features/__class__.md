---
type: "PHP Feature"
title: "__CLASS__"
description: "``__CLASS__`` holds the current class name: this is the class of definition, not the called class."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic-constant", "case-sensitive"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __CLASS__

``__CLASS__`` holds the current class name: this is the class of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The class name includes the namespace it was declared in, such as  ``N\X``. It does not include the leading ``\``. 

When used inside a trait method or property default, ``__CLASS__`` is the name of the class the trait is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

This constant is written in uppercase, by convention. It is case-insensitive, and may be used with any combination of uppercase and lowercase.

```php
<?php

    namespace N; 
    
    class X {
        function foo() {
            echo __CLASS__;  // N\X
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [PHP's Magic Constants: __LINE__, __FILE__, __FUNCTION__, __CLASS__, and __METHOD__](https://davidwalsh.name/php-magic-constants)
- [Magical Constants in PHP: Explained with Examples](https://medium.com/@blogshub4/magical-constants-in-php-explained-with-examples-4b6fa187a694)

## Related
- [__FUNCTION__](/features/__function__.md)
- [__METHOD__](/features/__method__.md)
- [__TRAIT__](/features/__trait__.md)
- [get_class()](/features/get_class.md)
- [Magic Constants](/features/magic-constant.md)

