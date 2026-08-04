# Late Static Binding
PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance.
```php
<?php

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();

?>
```

## See Also

+ [Late static binding in PHP - What, How & When](https://www.amitmerchant.com/late-static-binding-php-what-how-when/)
+ [A real life example of using Late Static Binding in PHP](https://dev.to/asifzcpe/a-real-life-example-of-using-late-static-binding-in-php-h6b/)
+ [Example of using Late Static Binding in PHP](https://dev.to/developeralamin/example-of-using-late-static-binding-in-php-18kh)

Related : [Self](Self), [static](static), [parent](parent), [Early Binding](Early Binding), [Child Class](Child Class), [Compile Time](Compile Time), [Execution Time](Execution Time), [Method Resolution Order (MRO)](Method Resolution Order (MRO))
