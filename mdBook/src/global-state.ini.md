# Global State
Global state refers to data that is accessible from anywhere in the application, typically stored in global variables, superglobals, or static class properties.

Global state is often considered an anti-pattern because it makes code harder to test, debug, and reason about. It creates hidden dependencies between components.

Common sources of global state include:

+ ``$GLOBALS`` superglobal
+ Static class properties
+ Constants defined with ``define()``
+ Files included with require/include
+ Environment variables.
```php
<?php

    // Global state via static property
    class Config {
        public static array $settings = [];
    }
    
    // Global state via $GLOBALS
    $GLOBALS['db_host'] = 'localhost';

?>
```

Related : [Global Variables](Global Variables), [$GLOBALS]($GLOBALS), [State](State), [Immutable](Immutable), [Side Effect](Side Effect), [Unit Test](Unit Test)
