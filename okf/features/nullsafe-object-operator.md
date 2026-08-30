---
type: "PHP Feature"
title: "Null Safe Object Operator"
description: "The Null Safe Object Operator behaves like the object operator, until the object is null."
resource: "https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.nullsafe"
tags: ["operator"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Null Safe Object Operator

The Null Safe Object Operator behaves like the object operator, until the object is null. Then, instead of failing with a fatal error, it returns null.

```php
<?php

function foo() : ?A {}

class A {
    public $property = 1;
}

// This will not fail, but also display nothing
echo foo()?->property;

// This will fail, when foo() returns null
echo foo()->property;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.nullsafe](https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.nullsafe)

## See Also
- [This nullsafe operator could come in PHP 8](https://www.amitmerchant.com/nullsafe-operator-php/)
- [Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator](https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b/)
- [Null safe operator in practice](https://www.exakat.io/en/null-safe-operator-in-practice/)
- [Exploring the Null Safe Operator in PHP](https://techvblogs.com/blog/exploring-the-null-safe-operator-php)

## Related
- [Object Operator ->](/features/object-operator.md)
- [Scope Resolution Operator ::](/features/scope-resolution-operator.md)

## Details
- PHP since: 8.0+

