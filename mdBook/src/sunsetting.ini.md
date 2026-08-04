# Sunsetting
Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage. It is also displaying a warning message to alert of the disappearance, and offers alternatives.
```php
<?php

    //Deprecated: foo(): Implicitly marking parameter $i as nullable is deprecated, the explicit nullable type must be used instead 
    function foo(int $i = null) {}

    #[Deprecated]
    function goo(int $i = null) {}

?>
```

## See Also

+ [How to Sunset a Feature (2025)](https://producthq.org/agile/product-management/how-to-sunset-a-feature/)
+ [How to sunset a feature](https://www.intercom.com/blog/how-to-sunset-a-feature/)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

Related : [Feature](Feature), [Deprecation](Deprecation)
