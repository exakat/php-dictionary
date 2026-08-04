# Handle
A handle represents a datastructure that has established a link with an independent resource. There are handles for files, for database connection, for http connections, etc.

The content of the handle is usually opaque: there is no need to know what is inside, except that this handle must be provided to every function call.

Handles are often build with the type ``resource``, and they are evolving toward objects. The content is still opaque, but the objects carry the dataset between method calls.
```php
<?php

    $handle = fopen("c:\folder\resource.txt", r);
    $string = fread($handle);
    fclose($handle);

?>
```

Related : [resource](resource), [Object](Object), [Data Structure](Data Structure), [fopen()](fopen()), [Client URL (CURL)](Client URL (CURL)), [Database](Database)
