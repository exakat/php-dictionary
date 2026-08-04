# Null Safe Object Operator
The Null Safe Object Operator behaves like the object operator, until the object is null. Then, instead of failing with a fatal error, it returns null.
```php
<?php

function foo() : ?A {}

class A {
    public $property = 1;
}

// This will not fail, but also display nothing
echo foo()?->property;

// This will fail, when foo() returns null
echo foo()->property;

?>
```

## See Also

+ [This nullsafe operator could come in PHP 8](https://www.amitmerchant.com/nullsafe-operator-php/)
+ [Mastering Null Safety in PHP 8: A Comprehensive Guide to Using the Null Safe Operator](https://medium.com/@prevailexcellent/mastering-null-safety-in-php-8-a-comprehensive-guide-to-using-the-null-safe-operator-47835ba1140b/)
+ [Null safe operator in practice](https://www.exakat.io/en/null-safe-operator-in-practice/)
+ [Exploring the Null Safe Operator in PHP](https://techvblogs.com/blog/exploring-the-null-safe-operator-php)

Related : [Object Operator ->](Object Operator ->), [Scope Resolution Operator ::](Scope Resolution Operator ::)
