# Static Method
Static methods are methods defined with the static keyword. They have to be called with the name of the class, rather than instantiated object.
```php
<?php

    class X {
        static function foo() {
            echo __METHOD__;
        }
    }
    
    //displays x::foo
    x::foo();

?>
```

## See Also

+ [When to use static methods](https://verraes.net/2014/06/when-to-use-static-methods-in-php/)
+ [When Should You (And Shouldn’t You) Use Static Methods in Laravel/PHP? A Practical Guide](https://medium.com/@laravelprotips/when-should-you-and-shouldnt-you-use-static-methods-in-laravel-php-a-practical-guide-1b1caac46f2d/)
+ [Static Methods in PHP: Practical Patterns, Pitfalls, and Production Guidance (2026)](https://thelinuxcode.com/static-methods-in-php-practical-patterns-pitfalls-and-production-guidance-2026/)

Related : [Method](Method), [Named Constructors](Named Constructors), [Scope Resolution Operator ::](Scope Resolution Operator ::), [Static Class](Static Class), [Static Property](Static Property), [Testable](Testable)
