# NoDiscard
``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context. That value must be processed there, and not ignored, as it is important for the rest of the processing.

``NoDiscard`` is already used internally, with ``flock`` and ``DateTimeImmutable::setTime()``, to ensure that the result is checked.
```php
<?php

    #[\NoDiscard("This returns NULL in case of error")]
    function foo(): ?array {}
    
    $result = foo();
    if ($result === null) { 
        throw new Exception('an error occured!');
    }

?>
```

## See Also

+ [PHP RFC: Marking return values as important (#[\NoDiscard])](https://wiki.php.net/rfc/marking_return_value_as_important)
+ [#[\NoDiscard] — Warn When Return Values Are Ignored](https://haphpiness.com/#/happy/42)

Related : [Attribute](Attribute), [Attribute Class](Attribute Class), [PHP Native Attributes](PHP Native Attributes), [PHP Native Attribute](PHP Native Attribute), [(void) Cast]((void) Cast)
