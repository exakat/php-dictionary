# Global Space
The term ``global space`` refers to the global namespace ``\\\\`` or the top-level scope in the PHP language. The global space is where global variables, functions, and global constants reside. When a variable, function, or constant is defined without specifying a namespace, it is stored in the global space.

It is recommended to avoid using the global space for any definition: they should be stored in a custom namespace. Then, they may be imported in other namespaces, with the ``use`` expression.
```php
<?php

// This is the global space
namespace {
    // this function is defined in the global space
    function foo() {} 
} 

?>
```

Related : [Use Alias](Use Alias), [Import](Import)
