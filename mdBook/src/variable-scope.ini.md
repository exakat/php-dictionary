# Variable Scope
Variable scope is the context in which the variable is available. The context is often one method or function. 

``global`` keywords allows variables from other contexts to be available in the current one. 

Local variables are only available in one method or function, not counting the local or bind closures or arrow functions.
```php
<?php

function foo() {
    // $a is only available in foo
    $a = 1;
}

function bar() {
    // $a is only available in bar, and is distinct from the one in foo()
    $a = 2;

    // $bar is only available in bar, the followring closure and the arrow function
    $b = 1;
    
    $c = function() use ($b) { return $b;};
    $d = function() use ($b) { return $b;};
}

?>
```

## See Also

+ [What are the different scopes of variables in PHP ?](https://www.geeksforgeeks.org/php/what-are-the-different-scopes-of-variables-in-php/)

Related : [Variables](Variables), [global Scope](global Scope), [Visibility](Visibility)
