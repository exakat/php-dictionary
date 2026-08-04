# Copy On Write (COW)
``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified. When a modification happens, the data is then duplicated, to avoid polluting the original data. Otherwise, simple reads keep the data intact, and save a copy operation and memory. 

PHP uses this technique for arrays and strings, unless they are passed by reference. It is totally transparent for the code.
```php
<?php

    $array = [1,2,3];
    
    function foo($a) {
        echo $a[1]; // 
        
        $a[2] = 4; // $a is copied, then modified.
    }

?>
```

## See Also

+ [Writing PHP Extensions: Copy on Write](https://www.zend.com/resources/php-extensions/copy-on-write)

Related : [Internals](Internals)
