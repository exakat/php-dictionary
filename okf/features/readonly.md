---
type: "keyword"
title: "Readonly"
description: "A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization."
resource: "https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties"
tags: ["feature", "keyword"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Readonly

A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization.

``readonly`` also applies inside the ``__clone()`` magic method: cloning doesn't allow for changing a readonly property.

A class may be readonly since version 8.2, making all of of its properties readonly too. The children classes must also be readonly.

```php
<?php

    class Test {
       public readonly string $prop;
    
       public function __construct(string $prop) {
           // Legal initialization.
           $this->prop = $prop;
       }
    }
    
    $test = new Test(foobar);
    // Legal read.
    var_dump($test->prop); // string(6) foobar 
    
    // Illegal reassignment. It does not matter that the assigned value is the same.
    $test->prop = foobar;
    // Error: Cannot modify readonly property Test::$prop

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)

## See Also
- [PHP 8.1: Readonly Properties](https://php.watch/versions/8.1/readonly)
- [The Hidden Surprises of PHP Readonly Properties](https://phpfashion.com/en/php-readonly-properties)

## Related
- [Class](/features/class.md)
- [__clone() Method](/features/__clone.md)
- [Properties](/features/property.md)
- [Clone](/features/clone.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Var](/features/var.md)
- [Writeable](/features/writeable.md)
- [Ownership](/features/borrow-checking.md)
- [Record Type](/features/record-type.md)
- [Struct Type](/features/struct-type.md)
- [Type System](/features/type-system.md)
- [Modifier](/features/modifier.md)

## Details
- PHP since: 8.1

