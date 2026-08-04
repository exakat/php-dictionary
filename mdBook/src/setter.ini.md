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

## See Also

+ [What are getters and setters methods in PHP?](https://www.tutorialspoint.com/what-are-getters-and-setters-methods-in-php)
+ [The Magic of PHP Getters, Setters, and Readonly Classes: Crafting Clean and Efficient Code](https://medium.com/@lordNeic/the-magic-of-php-getters-setters-and-readonly-classes-crafting-clean-and-efficient-code-edf7c852f340)

Related : [Class](Class), [Class Getter Method](Class Getter Method), [Class Wither Method](Class Wither Method), [Encapsulation](Encapsulation)
