# Offensive Programming
Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against. Only external input, such as user input, should be thoroughly validated before usage.

Offensive programming requires drawing a line between internal and external data: while user input is obviously to be validated, there must be a clear rule for data coming from related services such as database, remote servers, API, file systems.
```php
<?php

    $number = random_int(0, 10);
    // This handle cases where no entropy sources are found 

?>
```

Related : [Defensive Programming](Defensive Programming), [Paradigm](Paradigm)
