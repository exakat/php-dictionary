# $argv
``$argv`` is a PHP variable that contains an array of the arguments passed to the PHP script, in the command line. ``$argv`` is not defined when PHP is run in a webserver.

``$argv`` is not a superglobal: it has to be imported in a non-global scope with the ``global`` keyword.
```php
<?php

    print_r($argv);

?>
```

## See Also

+ [Get Command-Line Arguments With PHP $argv or getopt()](https://code.tutsplus.com/get-command-line-arguments-with-php-argv-or-getopt--cms-39201t)

Related : [$argc]($argc), [PHP Variables](PHP Variables), [global Scope](global Scope), [$GLOBALS]($GLOBALS), [Command Line Interface (CLI)](Command Line Interface (CLI)), [register_argc_argv](register_argc_argv)
