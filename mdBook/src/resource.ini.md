# resource
A resource is a special type of data, holding a reference to an external resource. Resources are created and used by special functions. 

Resources are only used with their dedicated functions. It is not possible to modify them in any other way.

Resources, in general, are being removed from PHP code and more recent versions tend to rely less on them and more on objects. 

There is a list of PHP resources available in the docs.
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r+');
    var_dump(is_resource($fp));

?>
```

## See Also

+ [List of Resource Types](https://www.php.net/manual/en/resource.php)

Related : [Type System](Type System), [PHP Natives](PHP Natives), [Array Syntax](Array Syntax), [Handle](Handle), [Object Syntax](Object Syntax), [Resource Leak](Resource Leak)
