# Forward Compatible
A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the increment of non-numeric strings. This feature might be deprecated, and could be removed in a future version, not defined at the time of writing. The functions ``str_increment()`` and ``str_decrement()`` were introduced in version 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible.
```php
<?php

    $a = 't';
    echo ++$a; //u
    
    $a = str_increment($a);
    echo $a; // v

?>
```

Related : [Backward Compatible](Backward Compatible), [Backward Incompatible](Backward Incompatible), [Deprecated](Deprecated), [Upgrade](Upgrade), [Version](Version), [delayedtargetvalidation](delayedtargetvalidation)
