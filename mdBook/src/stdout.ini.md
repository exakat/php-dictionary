# STDOUT
``stdout`` refers to the standard output stream. It is a common term used in programming to represent the destination for standard output data. 

Native PHP functions echo and print typically send their argument to the standard output stream.

The standard output stream is explicitly available with the constant ``STDOUT``. This is a writeonly stream. 

The standard output is also available via the protocol ``php``, with the special URI ``stdout``. This is a writeonly stream.
```php
<?php

    // implicitely write to the standard output
    echo 'Hello world';
    
    // explicitely write to the standard output
    fwrite(STDOUT, 'Hello world');
    
    // explicitely write to the standard output
    $fp = fopen('php://stdout', 'w');
    fwrite($fp, 'Hello world');

?>
```

## See Also

+ [PHP Protocol](https://www.php.net/manual/en/wrappers.php.php)

Related : [Echo](Echo), [Print](Print), [Stream](Stream), [Pipe Operator](Pipe Operator), [Log](Log)
