# Destructor
The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. It is called ``__destruct``.

Most of the time, the destructor is automatic: removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and has no access to any display, including stdout. As such, calls to echo are ineffective, and it is recommended to store the needed logs in another system.
```php
<?php

class X {
    private $file;

    function __construct($path) {
        $this->file = fopen($path, 'w');
    }
    
    function __destruct() {
        fwrite($this->file, 'End');
        fclose($this->file);
    }
}

$x = new X('/tmp/test.txt');
unset($x);

?>
```

## See Also

+ [Introduction to Destructor in PHP](https://www.educba.com/destructor-in-php/)

Related : [Constructor](Constructor), [Exit](Exit), [Literal](Literal), [Defer Statement](Defer Statement), [Linear Type](Linear Type), [Object Lifecycle](Object Lifecycle), [Shutdown](Shutdown)
