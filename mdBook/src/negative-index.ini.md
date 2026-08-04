# negative-index
On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string. 

Negative index was added in version 7.1.

On an array, negative index are supported, without any special meaning: they are only available when provided. Their behavior changed when using automatic indexing though.
```php
<?php

    $string = 'abcd';
    
    echo $string[1]; // b
    echo $string[-1]; // c

?>
```

Related : [Index For Arrays](Index For Arrays), [String](String)
