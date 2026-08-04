# Useless
Some piece of code is useless when it doesn't bring any feature to the code. 

It may be the case of double checks, where a characteristic is checked twice in a row; or when the same operation is repeated multiple times, yet is idempotent.

It is also the case of unused calculations: they are processed, stored, but ultimately, not combined with anything else.
```php
<?php

function foo(array $array) {
    if (!empty($array)) {
        // foreach() checks automatically the array for elements, and skips the loop when the array is empty.
        foreach($array as $a) {
            doSomething(); 
        }
    }
}

// foo is defined and called
$result = foo([]);

?>
```

Related : [Double Check](Double Check), [Idempotent](Idempotent), [Unused](Unused), [Noop](Noop), [Propagation](Propagation)
