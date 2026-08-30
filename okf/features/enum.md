---
type: "keyword"
title: "Enumeration (enum)"
description: "Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type."
resource: "https://www.php.net/manual/en/language.enumerations.php"
tags: ["keyword", "feature", "cite", "structure", "enum"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Enumeration (enum)

Enumerations are a restricting layer on top of classes and class constants, intended to provide a way to define a closed set of possible values for a type.

```php
<?php

enum Suit
{
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

?>
```

## Documentation
- [https://www.php.net/manual/en/language.enumerations.php](https://www.php.net/manual/en/language.enumerations.php)

## See Also
- [Enumerations in PHP](https://www.delftstack.com/howto/php/php-enum/)
- [5 Pitfalls of Upgrade to Native PHP Enums and How to Avoid Them](https://tomasvotruba.com/blog/five-pitfalls-of-upgrade-to-native-php-enums-and-how-to-avoid-them/)
- [On the use of enums](https://peakd.com/hive-168588/@crell/on-the-use-of-enums)
- [Enum in PHP — Real life examples](https://medium.com/@danielarcher/enum-in-php-real-life-examples-a596ba421f3c)
- [PHP Enums: A Complete Guide with Real Examples](https://oatllo.com/php-enums-complete-guide)

## Related
- [Enumeration Case](/features/enum-case.md)
- [Collection](/features/collection.md)
- [Class Interface Trait Enumeration (CITE)](/features/cite.md)
- [Backed Enum](/features/backed-enum.md)
- [BackedEnum](/features/backedenum.md)
- [Case](/features/case.md)
- [http_build_query()](/features/http_build_query.md)
- [Unbacked Enum](/features/unbacked-enum.md)
- [UnitEnum](/features/unitenum.md)
- [Dynamic Class Constant](/features/dynamic-class-constant.md)
- [Algebraic Data Type](/features/algebraic-data-type.md)
- [Compile-time Evaluation](/features/compile-time-evaluation.md)
- [Sealed Class](/features/sealed-class.md)
- [Sum Type](/features/sum-type.md)

## Details
- PHP since: 8.1+
- Packagist: [myclabs/php-enum](https://packagist.org/packages/myclabs/php-enum)
- Packagist: [dasprid/enum](https://packagist.org/packages/dasprid/enum)
- Packagist: [spatie/enum](https://packagist.org/packages/spatie/enum)

