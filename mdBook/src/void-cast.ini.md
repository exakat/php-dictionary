# (void) Cast
The ``(void)`` cast is a special cast. It doesn't actually cast a value to ``void``, which does not exist as data, only as a type. ``(void)`` actually tells the ``#[NoDiscard]`` attribute that the returned value is explicitly discarded. Otherwise, PHP expects the returned value to be collected and used.
```php
<?php

#[NoDiscard]
function foo() {
    return 1;
}

// OK
(void) foo(); 

// Wrong, the returned value MUST be collected
foo(); 

?>
```

## See Also

+ [#[\NoDiscard] attribute](https://www.php.net/manual/en/migration85.new-features.php#migration85.new-features.core.nodiscard-attribute)
+ [Stop Ignoring Important Returns with PHP 8.5’s #[\NoDiscard] Attribute](https://www.amitmerchant.com/the-nodiscard-attribute-in-php-85/)

Related : [NoDiscard](NoDiscard)
