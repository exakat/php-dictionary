# global Scope
The global scope is the top level scope. It is the scope when no function, or method scope is active. It is also the first scope when starting execution. 

Variables from the global scope are accessible in other scopes by using the ``global`` keyword, or the ``$GLOBALS`` variable. Variables in the global scope are automatically added to the $GLOBALS variable; in local scopes, the ``global`` keyword have that effect too.

Some special variables are called superglobal: they are available in every scope.

The opposite of the global scope is the local scope. 

```php
<?php

    $x = 'A';
    
    function counter() {
        echo $GLOBALS['A'];
    
        global $x;
        
        echo $x;
    }
    
    foo();

?>
```

Related : [Variables](Variables), [Static Variables](Static Variables), [Variable Variables](Variable Variables), [Global Variables](Global Variables), [Namespaces](Namespaces), [$argv]($argv), [glob()](glob()), [Local Scope](Local Scope), [Scope](Scope), [Fallback To Global](Fallback To Global), [Variable Scope](Variable Scope), [Superglobal Variables](Superglobal Variables)
