# Final Keyword
The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.

The final keyword cannot be used with the private keyword: a private method is not visible in the child classes, and can't also be redefined.
```php
<?php

class x {
    final const X = 1;
    
    final function method() { }
}

?>
```

## See Also

+ [Final Classes: Open for Extension, Closed for Inheritance](https://verraes.net/2014/05/final-classes-in-php/)
+ [How to Mock Final Classes in PHPUnit](https://tomasvotruba.com/blog/2019/03/28/how-to-mock-final-classes-in-phpunit/)
+ [Why (nearly) every PHP class you write should be abstract or final](https://matthewdaly.co.uk/blog/2023/08/13/why-nearly-every-php-class-you-write-should-be-abstract-or-final/)
+ [When to declare classes final](https://ocramius.github.io/blog/when-to-declare-classes-final/)

Related : [Overwrite](Overwrite), [Private Visibility](Private Visibility), [Abstract Class](Abstract Class), [Abstract Keyword](Abstract Keyword), [Static Constant](Static Constant), [Final Class Constants](Final Class Constants), [Fluent Interface](Fluent Interface), [Object](Object), [Protected Visibility](Protected Visibility), [Public Visibility](Public Visibility), [Abstract Method](Abstract Method), [Concrete Method](Concrete Method), [Var](Var)
