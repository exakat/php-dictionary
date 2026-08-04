# PDOException
``PDOException`` represents an error raised by PDO. It is recommended to never throw a ``PDOException`` from custom code, and only catch such exception, emitted directly by the PHP engine.
```php
<?php

    try {
      $pdo = new PDO('sqlite:myfile.sqlite');
    } catch(PDOException $e) {
        die('Unable to open database connection');
    } 

?>
```

Related : [Exception](Exception)
