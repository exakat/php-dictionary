---
type: "PHP Feature"
title: "Asymmetric Visibility"
description: "Asymmetric visibility, also called set visibility, is a feature of PHP class properties."
resource: "https://www.php.net/manual/en/language.oop5.visibility.php"
tags: ["visibility", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Asymmetric Visibility

Asymmetric visibility, also called set visibility, is a feature of PHP class properties. They refer to the situation where different scopes may read, or ``get`` or write, or ``set``.

Traditionally, the visibility options, ``private``, ``protected`` and ``public``, constrain the access to the property, both in reading and writing. With asymmetric visibility, there may be contexts that have different rights of access.

```php
<?php

class X {
    public private(set) string $p = 'abc';
    
    function setP($p) {
        $this->p = $p;
    }
}

$x = new X();
echo $x->p; // abc
$x->setP('def'); 
echo $x->p; // def

// 
$x->p = 'ghi';

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.visibility.php](https://www.php.net/manual/en/language.oop5.visibility.php)

## See Also
- [PHP Asymmetric Visibility RFC: An In-Depth Look](https://developerjoy.co/blog/php-asymmetric-visibility-rfc-an-in-depth-look)
- [New in PHP 8.5: Asymmetric Visibility for Static Properties](https://chrastecky.dev/programming/new-in-php-8-5-asymmetric-visibility-for-static-properties)

## Related
- [Visibility](/features/visibility.md)
- [Properties](/features/property.md)
- [Asymmetric Property](/features/asymmetric-property.md)
- [Property Type Declaration](/features/type-declaration-property.md)
- [Var](/features/var.md)

