# Dynamic Properties
Dynamic properties are properties created on the fly, without previous definition. 

When the class implements the magic methods ``__get()`` and ``__set()``, of if the class extends ``stdClass``, then no warning is emitted.
```php
<?php

    class X {
        private $property = 1;
        
        function foo() {
            // dynamic property
            $this->a = 1;
            
            // dynamic property with variable name 
            $b = 'abc';
            $this->$b = 1; 
            
            // static property
            $this->property = 1;
        }
    }

?>
```

## See Also

+ [PHP, what are dynamic properties?](https://medium.com/geekculture/php-what-are-dynamic-properties-2509c6fbccf8)
+ [PHP's Dynamic Properties RFC: A Case of Solving the Wrong Problem](https://luandaphp.unaux.com/php-dynamic-properties-article.html)

Related : [Properties](Properties), [Magic Methods](Magic Methods), [stdclass](stdclass), [Dynamic](Dynamic), [Var](Var)
