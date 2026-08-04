# $php_errormsg
``$php_errormsg`` contains the last error message, emitted by PHP. 

In general, ``error_get_last()`` should be used instead of ``$php_errormsg``, although this function returns an array, not a string.

This feature was removed in version 8.0.
```php
<?php

    // Warning: Undefined variable $php_errormsg 
    // in PHP 8.0 (sic)
    echo $php_errormsg;

    print_r(error_get_last());

?>
```

Related : [$GLOBALS]($GLOBALS), [$this]($this)
