---
type: "keyword"
title: "Final Keyword"
description: "The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final."
resource: "https://www.php.net/manual/en/language.oop5.final.php"
tags: ["keyword", "class", "method"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Final Keyword

The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.

The final keyword cannot be used with the private keyword: a private method is not visible in the child classes, and can't also be redefined.

```php
<?php

class x {
    final const X = 1;
    
    final function method() { }
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.final.php](https://www.php.net/manual/en/language.oop5.final.php)

## See Also
- [Final Classes: Open for Extension, Closed for Inheritance](https://verraes.net/2014/05/final-classes-in-php/)
- [How to Mock Final Classes in PHPUnit](https://tomasvotruba.com/blog/2019/03/28/how-to-mock-final-classes-in-phpunit/)
- [Why (nearly) every PHP class you write should be abstract or final](https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/)
- [When to declare classes final](https://ocramius.github.io/blog/when-to-declare-classes-final/)

## Related
- [Overwrite](/features/overwrite.md)
- [Private Visibility](/features/private.md)
- [Abstract Class](/features/abstract-class.md)
- [Abstract Keyword](/features/abstract.md)
- [Static Constant](/features/class-constant.md)
- [Final Class Constants](/features/final-class-constant.md)
- [Fluent Interface](/features/fluent-interface.md)
- [Object](/features/object.md)
- [Protected Visibility](/features/protected.md)
- [Public Visibility](/features/public.md)
- [Abstract Method](/features/abstract-method.md)
- [Concrete Method](/features/concrete-method.md)
- [Var](/features/var.md)

## Details
- PHP since: 7.0

