---
type: "PHP Feature"
title: "Class Getter Method"
description: "Getters are methods used to access the values of a property."
resource: "https://www.geeksforgeeks.org/php/what-are-getters-and-setters-methods-in-php/"
tags: ["method types"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Class Getter Method

Getters are methods used to access the values of a property. Getters may include formatting, or not. 

Getters are usually created with a setter method.

Getters are built on top of private properties: that way, the getter is the main way to reach the data.

Getters may be replaced by a property hook.

Getters generate a lot of boilerplate code, as they must be created for each property, and are often reduced to returning the property itself. This does not help performance either, as a call to a property is now replaced by a method call.

```php
<?php

    class X {
        private $property;
        
        public function getProperty() {
            return $this->property;
        }
    }

?>
```

## Documentation
- [https://www.geeksforgeeks.org/php/what-are-getters-and-setters-methods-in-php/](https://www.geeksforgeeks.org/php/what-are-getters-and-setters-methods-in-php/)

## See Also
- [PHP Getters and Setters Tutorial: Encapsulation Guide](https://oatllo.com/course/php/objective-programming/php-getter-setter-guide)
- [The Magic of PHP Getters, Setters, and Readonly Classes: Crafting Clean and Efficient Code](https://medium.com/@lordNeic/the-magic-of-php-getters-setters-and-readonly-classes-crafting-clean-and-efficient-code-edf7c852f340)

## Related
- [Class](/features/class.md)
- [Class Setter Method](/features/setter.md)
- [Class Wither Method](/features/wither.md)
- [Property Hook](/features/property-hook.md)
- [Visibility](/features/visibility.md)
- [Boilerplate](/features/boilerplate.md)
- [Encapsulation](/features/encapsulation.md)
- [implements](/features/implements.md)

## Details
- PHP since: 5.0+

