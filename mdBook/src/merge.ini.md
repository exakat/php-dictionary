# Merge
To merge is the action of combining two things into one. There are usually two meaning associated with PHP code: 

+ Merging arrays, with the eponymous function ``array_merge()``, or the ``+`` operator
+ Code merge, using a VCS, such as git, svn, etc.
```php
<?php

    $array1 = [1,2];
    $array2 = [3,4];
    
    array_merge($array1, $array2); // [1,2,3,4]
    $array1 + $array2;             // [1,2,3,4]

?>
```

Related : [array_merge()](array_merge()), [Version Control System (VCS)](Version Control System (VCS)), [VCS Commit](VCS Commit)
