# Global Variables
Global variables reside in the global scope, and may be imported in a local scope with the ``global`` keyword.

To become a global variable, a variable may use one of the following ways: 

+ Be declared as such with the ``global`` keyword
+ Be created in the ``$GLOBALS`` variable, which is a global variable itself
+ Be created outside any function, method, closure
+ Be a super-global

Global variables provides a way to share data in different and remote scopes. It also provide a way for data to be modified by another part of the code, without warning.
```php
<?php

    global $count;
    $count = 0;
    
    function counter() {
        global $count;
        
        // no return here
        ++$count;
    }
    
    counter(); 
    echo $count; // print 1
    counter(); 
    echo $count; // print 2

?>
```

## See Also

+ [How to Declare a Global Variable in PHP?](https://www.geeksforgeeks.org/php/how-to-declare-a-global-variable-in-php/)

Related : [Variables](Variables), [Static Variables](Static Variables), [Variable Variables](Variable Variables), [$GLOBALS]($GLOBALS), [global Scope](global Scope), [Superglobal Variables](Superglobal Variables), [Distributed State](Distributed State), [$GLOBALS]($GLOBALS), [Hidden State](Hidden State), [Implicit State](Implicit State), [Legacy](Legacy), [Local Variable](Local Variable)
