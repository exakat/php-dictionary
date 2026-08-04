# static
The ``static`` keyword has several distinct usages.

Static is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current called class.

Static is a keyword for methods and properties: they are turned into class elements, and should be reached with the ``::`` syntax, instead of ``->`` or ``?->``.

Static is a keyword for closures and arrow functions: it prevents the current scope to be included in with the closure, thus limiting the number of accessible values.

Static is a keyword for variables: those variables aren't removed at the end of the method execution and are available at the beginning of the next call.
```php
<?php

    class X {
        private const X = 1;
        
        function foo() {
            return static::X;
    
            // same as \X::C; when the object is of class X
            // same as \Y::C; when the object is of class W
        }
    }
    
    class Y extends X {
        private const X = 2;
    }

?>
```

## See Also

+ [Stop using “static” in PHP](https://blog.devgenius.io/stop-using-static-in-php-b150527819b2)
+ [5 usages of static keyword in PHP](https://www.exakat.io/en/5-usages-of-static-keyword-in-php/)
+ [Scope of Variables](https://jobtensor.com/Tutorial/PHP/en/Variables)

Related : [parent](parent), [Closure](Closure), [Arrow Functions](Arrow Functions), [Variables](Variables), [Late Static Binding](Late Static Binding), [Child Class](Child Class), [Language Construct](Language Construct), [Properties](Properties), [Self](Self), [Dynamic](Dynamic), [Special Types](Special Types), [PHP Natives](PHP Natives), [Relative Types](Relative Types), [Property Type Declaration](Property Type Declaration), [Var](Var)
