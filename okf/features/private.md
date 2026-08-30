---
type: "keyword"
title: "Private Visibility"
description: "The private keyword is part of the three keywords to define visibility of a method, property or class constant."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php"
tags: ["keyword", "visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Private Visibility

The private keyword is part of the three keywords to define visibility of a method, property or class constant. It is the strictest level of visibility: it restricts usage to the current class only. A child class can redefine it, but it cannot the parent's: the reverse is also true.

The private keyword cannot be used with the ``final`` keyword: a private method is not visible in the child classes, and can't also be overridden.

The private keyword cannot be used with the ``abstract`` keyword: a private method is not visible in the child classes, and can't also be overridden.

```php
<?php

    class X {
        private const X = 1;
        
        final public function method() { 
            echo self::X;
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php](https://www.php.net/manual/en/language.oop5.visibility.php)

## See Also
- [Information hiding](https://en.wikipedia.org/wiki/Information_hiding)

## Related
- [Final Keyword](/features/final.md)
- [Visibility](/features/visibility.md)
- [Protected Visibility](/features/protected.md)
- [Public Visibility](/features/public.md)
- [Var](/features/var.md)
- [Overwrite](/features/overwrite.md)
- [Abstract Keyword](/features/abstract.md)
- [Data Hiding](/features/data-hiding.md)
- [Modifier](/features/modifier.md)
- [Package-Level](/features/package-visibility.md)

