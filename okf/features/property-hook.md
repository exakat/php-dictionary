---
type: "PHP Feature"
title: "Property Hook"
description: "Property hooks are a feature of PHP 8.4, where accessors can be defined with the property."
resource: "https://www.php.net/manual/en/language.oop5.property-hooks.php"
tags: ["class", "method", "rfc", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Property Hook

Property hooks are a feature of PHP 8.4, where accessors can be defined with the property. 

Hooks are for ``set`` and ``get``: they allow extra commands to be always executed at setting or getting time of a property. 

Hooks look like the magic methods ``__set`` and ``__get``, with a few differences: they are dedicated to a property, and easier to write.

Property hooks are also called ``Property Accessors``, in other languages.

```php
<?php

    class X {
        public string $property {
            // this is the single line definition of a hook
            // the expression is the returned value
            get => $this->property . '1';
    
            set {
                // $value is the unique parameter of that function
                $this->property = $value;
            }
        }
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.property-hooks.php](https://www.php.net/manual/en/language.oop5.property-hooks.php)

## See Also
- [PHP 8.4 Property Hooks](https://ashallendesign.co.uk/blog/php-84-property-hooks)
- [PHP 8.4 Property Hooks: The Ultimate Guide for Developers](https://qirolab.com/posts/php-84-property-hooks)
- [PHP RFC: Property hook improvements](https://wiki.php.net/rfc/hook_improvements)
- [A Guide to PHP 8.4 Property Hooks](https://www.zend.com/blog/php-8-4-property-hooks)
- [PHP’s New Property Hooks Are Here—But Should You Use Them?](https://hackernoon.com/phps-new-property-hooks-are-herebut-should-you-use-them)
- [Using property hooks in PHP](https://dyrynda.com.au/blog/using-property-hooks-in-php)

## Related
- [Properties](/features/property.md)
- [__get() Method](/features/__get.md)
- [__set() Method](/features/__set.md)
- [Magic Methods](/features/magic-method.md)
- [Double Arrow](/features/double-arrow.md)
- [Magic Constants](/features/magic-constant.md)
- [Virtual Property](/features/virtual-property.md)
- [Writeable](/features/writeable.md)
- [Class Getter Method](/features/getter.md)
- [Property Type Declaration](/features/type-declaration-property.md)

## Details
- PHP since: 8.4

