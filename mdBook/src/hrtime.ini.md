# hrtime()
``hrtime()`` is a native PHP function and an PIE extension. As a function, ``hrtime()`` returns the high precision time of the system. 

``HRT`` represents an acronym of ``High Resolution Time``. 

The time is of high precision, but counted from an arbitrary point of time: the value of this function is in calculating differences between two ``hrtime()`` calls, rather than the obtained value.

``hrtime()`` is a modern replacement for ``microtime()``.
```php
<?php

    $timeStart = hrtime(true);
    
    // Sleep some time
    usleep(100);
    
    $timeEnd = hrtime(true);
    $time = $timeEnd - $timeStart;
    
    echo "Slept for $time micro-seconds\n";
    
?>
```

## See Also

+ [PHP hrtime Function](https://zetcode.com/php/hrtime/)

Related : [microtime()](microtime()), [Micro-second](Micro-second), [sleep](sleep)
