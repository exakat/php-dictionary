# RangeException
The RangeException exception is thrown if a value is out of range. It usually means that a values overflows or underflows.

RangeException are defined by the SPL extension. It is use by the SplStack class.
```php
<?php

    try {
        $var = new SplStack();
        $var->offsetSet(100,new DateTime('2000-01-01'));
    } catch(OutOfRangeException $e) {
        print $e->getMessage() . \n; 
    }

?>
```

Related : [Exception](Exception), [Overflow](Overflow), [Underflow](Underflow), [DomainException](DomainException)
