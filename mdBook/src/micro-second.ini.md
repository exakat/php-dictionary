# Micro-second
Micro-seconds are one thousandth of a second. They are accessible in different ways: 

+ ``Datetime`` and ``DateTimeImmutable`` objects, for dates
+ ``microtime()`` for dates
+ ``hrtime()`` for intervals

Do not use ``date()`` to get micro-seconds, as the function always returns 0.
```php
<?php

$ms = (new Datetime()->format('u'));

$ms = microtime(true);

?>
```

Related : [microtime()](microtime()), [hrtime()](hrtime()), [DateTime](DateTime), [DateTime](DateTime)
