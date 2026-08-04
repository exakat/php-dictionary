# $GLOBALS
This super-global is a PHP predefined variable, which holds a reference to every global variable in the application. It behaves as an associative array, where each key is the name of a global variable and each value is a reference to that variable, so reading or writing ``$GLOBALS['x']`` inside a function is equivalent to declaring ``global $x;`` first. Because it bypasses normal variable scoping, relying on ``$GLOBALS`` makes code harder to test and reason about, and it is generally considered a code smell in modern PHP, where dependency injection or object properties are preferred. Since PHP 8.1, some indirect writes to ``$GLOBALS`` -- through list assignment, by-reference ``foreach``, or array functions -- are restricted, since they no longer directly modify the underlying global variable.
```php
<?php

// implicit global variable
$aGlobalVariable = 1; 

function foo() {
    echo $GLOBALS['aGlobalVariable'];
    $GLOBALS['aGlobalVariable'] = 2;
}

foo(); // displays 1
echo aGlobalVariable; // 2

?>
```

## See Also

+ [PHP 8.1: $GLOBALS variable restrictions](https://php.watch/versions/8.1/GLOBALS-restrictions)
+ [Understanding PHP Globals and Variable Scope in WordPress](https://wpshout.com/php-globals-variable-scope-wordpress/#gref)

Related : [$_ENV]($_ENV), [$_SERVER]($_SERVER), [$argv]($argv), [$php_errormsg]($php_errormsg), [Global Variables](Global Variables)
