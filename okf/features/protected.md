---
type: "keyword"
title: "Protected Visibility"
description: "The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php"
tags: ["keyword", "visibility"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Protected Visibility

The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the middle level of visibility: it restricts usage to the current class, its parents and children.

```php
<?php

class W {
    public function methodY() { 
        // dependency on the child class
        echo self::X;
    }
}

class X extends W {
    protected const X = 1;
    
    public function method() { 
        echo self::X;
    }
}

class Y extends X {
    public function methodY() { 
        echo self::X;
    }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php](https://www.php.net/manual/en/language.oop5.visibility.php)

## See Also
- [PHP protected Keyword - Visibility Modifier in PHP](https://zetcode.com/php/protected-keyword/)
- [The Beginner's Guide to Understanding Visibility in PHP](https://medium.com/@timothyiloba/the-beginners-guide-to-understanding-visibility-in-php-object-oriented-programming-835ea9af323a)

## Related
- [Final Keyword](/features/final.md)
- [Visibility](/features/visibility.md)
- [Private Visibility](/features/private.md)
- [Public Visibility](/features/public.md)
- [Var](/features/var.md)

