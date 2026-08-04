# PHP Variables
PHP provides a set of predefined variables. They may be super-global, and available in any context, such as ``$_GET``; they may also be classic variable, in the global scope, such as ``$argv``.

The set of predefined variables changes with PHP versions: for example, in version 8.0, ``$phperrormsg`` was definitely removed. 

The set of predefined variables also depended on PHP directives. ``$HTTP_RAW_POST_DATA`` depended upon the ``always_populate_raw_post_data`` directive.
```php
<?php

    print_r($_GET);
    print_r($argv); // when in CLI
    print_r($GLOBALS);
    
    function foo() {
        global $argc;
    }

?>
```

## See Also

+ [Predefined Variables in PHP: For complete beginners](https://theguerrilla.agency/predefined-variables-in-php-an-overview-for-complete-beginners)

Related : [Superglobal Variables](Superglobal Variables), [Variables](Variables), [Native](Native), [$argc]($argc), [$argv]($argv)
