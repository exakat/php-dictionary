# Concrete Class
PHP has abstract classes and methods: the contrary to ``abstract`` is concrete. This is the default state of a method or class, when it has a code block with implementation. It also has no specific keyword to designate it.
```php
<?php

    abstract class AbstractClass
    {
        // Concrete method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    
        // Method without an implementation
        abstract protected function getValue();
    }

?>
```

## See Also

+ [Understanding Concrete Classes in PHP.](https://medium.com/@msaimhashmi/understanding-concrete-classes-in-php-f97d73d21aa0)

Related : [Abstract Keyword](Abstract Keyword), [Abstract Class](Abstract Class), [Abstract Method](Abstract Method), [Concrete Method](Concrete Method), [Program To Interface](Program To Interface)
