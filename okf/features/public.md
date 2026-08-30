---
type: "keyword"
title: "Public Visibility"
description: "The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php"
tags: ["keyword", "visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Public Visibility

The ``public`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the lowest level of visibility: it doesn't restrict usage.

``public`` is also the default visibility when it is omitted.

```php
<?php

    class X {
        // public constant
        const X = 1;
        public $p = 2;
    }
    
    $x = new x;
    echo $x->p;
    echo x::X;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php](https://www.php.net/manual/en/language.oop5.visibility.php)

## See Also
- [PHP public Keyword - Visibility Modifiers in PHP](https://zetcode.com/php/public-keyword/)
- [PHP Public, Private, Protected Access Explained](https://nulldog.com/php-public-private-protected-access-explained)

## Related
- [Final Keyword](/features/final.md)
- [Visibility](/features/visibility.md)
- [Private Visibility](/features/private.md)
- [Protected Visibility](/features/protected.md)
- [Var](/features/var.md)

