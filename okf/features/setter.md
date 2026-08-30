---
type: "PHP Feature"
title: "Class Setter Method"
description: "Setters are methods used to give the values of a property."
resource: "https://oatllo.com/course/php/objective-programming/php-getter-setter-guide"
tags: ["pattern", "method type"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Setter Method

Setters are methods used to give the values of a property. Setters may apply some filtering and validation before accepting the value.

Setters are usually created with a getter method.

```php
<?php

    class x {
        private $property;
        
        public function setProperty($value) {
            $this->property = $value;
        }
    }

?>
```

## Documentation
- [https://oatllo.com/course/php/objective-programming/php-getter-setter-guide](https://oatllo.com/course/php/objective-programming/php-getter-setter-guide)

## See Also
- [What are getters and setters methods in PHP?](https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php)
- [The Magic of PHP Getters, Setters, and Readonly Classes: Crafting Clean and Efficient Code](https://medium.com/@lordNeic/the-magic-of-php-getters-setters-and-readonly-classes-crafting-clean-and-efficient-code-edf7c852f340)

## Related
- [Class](/features/class.md)
- [Class Getter Method](/features/getter.md)
- [Class Wither Method](/features/wither.md)
- [Encapsulation](/features/encapsulation.md)

## Details
- PHP since: 5.0+

