# Segmentation Fault
``Segmentation fault`` is the laconic error message that is displayed when PHP crashes. It signals an error occurred during the execution of the PHP code, and it was not handled by any part of the engine. 

Segmentation faults are notoriously hard to fix. They are often linked to a bug, and there are some rare PHP syntax that leads to them. PHP 8.3 addresses them with a sensor that stops the problem before going out of hand.
```php
<?php

    // start the file by including itself immediately.
    // What do you expect? 
    include __FILE__; 
    
    // Until PHP 8.3
    // Segmentation fault

?>
```

## See Also

+ [Find Segfaults in PHP like a boss](https://jolicode.com/blog/find-segfaults-in-php-like-a-boss)

Related : [PHP Engine](PHP Engine)
