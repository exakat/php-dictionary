# Positional Parameters
Way of calling a function or method, where argument which are identified by their position in the signature or the call. This is the traditional way of sending arguments to a method. 

The alternative way is to use named parameters.
```php
<?php

function foo($a, $b) {
    return $a - $b;
}

echo foo(2, 3);  // return -1
echo foo(3, 2);  // return 1

echo foo(a: 2, b: 3);  // return -1
echo foo(b: 2, a: 3);  // return 1

?>
```

Related : [Named Parameters](Named Parameters)
