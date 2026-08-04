# implements
``implements`` is a keyword, dedicated to classes. It specify which interfaces a class implements.

Implemented interfaces may be tested with types, ``instanceof``, and ``is_a()``.

The list of implemented interfaces is accessible with the ``class_implements()`` function.
```php
<?php

    interface I {
        function fooi() ;
    }
    
    // empty interface 
    interface J { }
    
    class X implements I, J {
        private $property;
        
        public function fooi() {
            return 1;
        }
    }

?>
```

## See Also

+ [PHP Interfaces: How to Implement and Use Them](https://medium.com/@andreibirta95/php-interfaces-how-to-implement-and-use-them-58c8b0648480)

Related : [Class](Class), [Class Getter Method](Class Getter Method), [extends](extends), [class_implements()](class_implements())
