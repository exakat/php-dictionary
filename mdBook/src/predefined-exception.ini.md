# PHP Predefined Exception
The predefined exceptions are the exceptions that are built-in the PHP engine. They are always available, and change from version to version.
```php
<?php

    try {
        throw new RuntimeException('one error!');
    } catch (Exception $e) {
        print "Caught an exception of type ".get_class($e);
    }

?>
```

Related : [throw](throw), [Try-catch](Try-catch), [Exception](Exception), [Native](Native)
