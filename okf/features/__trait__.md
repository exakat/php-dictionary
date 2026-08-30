---
type: "PHP Feature"
title: "__TRAIT__"
description: "``__TRAIT__`` holds the current trait name: this is the trait of definition, not the called class."
resource: "https://www.php.net/manual/en/language.constants.magic.php"
tags: ["magic-constant"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __TRAIT__

``__TRAIT__`` holds the current trait name: this is the trait of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The trait name includes the namespace it was declared in, e.g. ``N\X``. It does not include the leading ``\``. 

When used outside a trait, ``__TRAIT__`` is empty. 

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case.

```php
<?php

    namespace N; 
    
    trait T {
        function foo() {
            echo __TRAIT__;  // N\T
            echo __CLASS__;  // N\X 
        }
    }
    
    class X {
        use T;
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.constants.magic.php](https://www.php.net/manual/en/language.constants.magic.php)

## See Also
- [Traits](https://www.php.net/manual/en/language.oop5.traits.php)
- [PHP Magic Constants - Examples of How Magic Constants Work in PHP](https://www.educba.com/php-magic-constants/)

## Related
- [__FUNCTION__](/features/__function__.md)
- [__METHOD__](/features/__method__.md)
- [__CLASS__](/features/__class__.md)

