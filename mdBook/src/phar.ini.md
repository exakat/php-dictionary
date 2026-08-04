# Phar
Phar is a the PHP Archive. It groups multiple files in a single one, and allows the direct execution or the inclusion of the code directly. 

ext/phar is also a PHP extension, used to create and read the PHAR archives. 

Phar archives may be zipped.
```php
<?php

    $phar = new Phar('myphar.phar');
    $pgz = $phar->convertToExecutable(Phar::TAR, Phar::GZ); // makes myphar.phar.tar.gz

?>
```

## See Also

+ [Phar executable compiling utility](https://github.com/yannoff/phpcc)

Related : [Deployment](Deployment), [Source Code](Source Code), [Archive](Archive), [UnexpectedValueException](UnexpectedValueException)
