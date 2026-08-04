# basename()
Basename is a PHP native function that returns the name of a file, extracted from a full path. 

When passed a second parameter, basename use it as the file extension and removes it. The file extension is then a string, and includes the dot. It is not possible to provide multiple file extensions.

``basenane()`` is locale aware, so it has to match the locale of the filesystem to find and remove the extension in multiple bytes encoding.

```php
<?php

    $path = '/var/www/index.php';
    
    print basename($path); // index.php
    print basename($path, '.php'); // index 
    print basename($path, '.PHP'); // index.php
    print basename($path, 'php'); // index.

?>
```

Related : [dirname](dirname)
