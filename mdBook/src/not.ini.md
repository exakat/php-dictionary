# Not Operator
The not operator return the opposite boolean of a value. The value is first converted to boolean, according to classic PHP rules, then, negated. This operator returns a boolean.

There is also a bitwise not operator, which works at the bit level, on the value: ``~``.

```php
<?php

    $a = 3;
    
    if (!$a) {
        print 'OK';
    } else {
        print 'KO';
    }

?>
```

Related : [Bang !](Bang !), [Tilde ~](Tilde ~), [Binary Not Operator](Binary Not Operator), [Logical Operators](Logical Operators)
