# Self-reference
A self-reference is a reference into one-self. 

An array may hold a reference onto itself. Some functions are disrupted by these references, and yield ``recursion detected``: ``compact()``, ``count()``, ``var_export()``, etc... 

``$GLOBALS`` is a self-reference array: it contains a reference onto itself, as it is also a global variable.

Variables cannot be self-reference, although they might reference another variable, stored in themselves.
```php
<?php

    $x = 1;
    $x = &$x;

    $array = [1,2,3, &$array];

?>
```

Related : [Variables](Variables), [Array, []](Array, []), [References](References)
