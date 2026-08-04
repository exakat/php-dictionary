# Server Application Programming Interface (SAPI)
SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server like ``nginx``, ``apache``, ``caddy``, ... , a debugger like phpdbg, ... or the command line interface.
```php
<?php

echo PHP_SAPI;
echo php_sapi_name();

?>
```

Related : [Common Gateway Interface (CGI)](Common Gateway Interface (CGI)), [Command Line Interface (CLI)](Command Line Interface (CLI)), [Read Eval Print Loop (REPL)](Read Eval Print Loop (REPL)), [Terminal User Interface (TUI)](Terminal User Interface (TUI))
