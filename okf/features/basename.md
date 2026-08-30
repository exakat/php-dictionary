---
type: "PHP Feature"
title: "basename()"
description: "Basename is a PHP native function that returns the name of a file, extracted from a full path."
resource: "https://www.php.net/manual/en/function.basename.php"
tags: ["path", "native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# basename()

Basename is a PHP native function that returns the name of a file, extracted from a full path. 

When passed a second parameter, basename uses it as the file extension and removes it. The file extension is then a string, and includes the dot. It is not possible to provide multiple file extensions.

``basename()`` is locale aware, so it has to match the locale of the filesystem to find and remove the extension in multiple bytes encoding.

```php
<?php

    $path = '/var/www/index.php';
    
    print basename($path); // index.php
    print basename($path, '.php'); // index 
    print basename($path, '.PHP'); // index.php
    print basename($path, 'php'); // index.

?>
```

## Documentation
- [https://www.php.net/manual/en/function.basename.php](https://www.php.net/manual/en/function.basename.php)

## See Also
- [Using the basename() Function in PHP](https://pimylifeup.com/php-basename/)
- [PHP basename() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-basename-function/)

## Related
- [dirname](/features/dirname.md)

