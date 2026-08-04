# Call
A call is the usage action of a definition or declaration. 

A call may be a function call, a method call, a static method call or a closure call. 

For example, a function is declared, then called. Calling an undefined structure is a fatal error.

A definition must happen before a call. The autoload process allows for last minute loading of a class definition. 

A call is usually done on a ``callable`` type of data.
```php
<?php

function foo() {} 

// calling a function
foo();

// calling an undefined function
goo();
//Fatal error: Uncaught Error: Call to undefined function goo()

?>
```

Related : [Definition](Definition), [Class Autoloading](Class Autoloading), [Callables](Callables), [Call Graph](Call Graph)
