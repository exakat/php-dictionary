# $argc
``$argc`` is a predefined variable that holds the number of arguments passed to the script when it is executed from the command line. It represents the argument count, hence the name ``$argc``.

When a PHP script is run from the command line, the script's filename is counted as the first argument, and any additional arguments passed after the filename are also counted. The value of ``$argc`` is an integer indicating the total number of arguments.
```php
<?php

    echo $argc;

?>
```

## See Also

+ [Arguments handling](https://riptutorial.com/php/example/786/argument-handling)

Related : [$argv]($argv), [PHP Variables](PHP Variables), [Command Line Interface (CLI)](Command Line Interface (CLI)), [register_argc_argv](register_argc_argv)
