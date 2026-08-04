# Special Types
PHP defines some special types.

+ ``mixed``: any type
+ ``void``: no returned value
+ ``callable``: may be used as a callback
+ ``iterable``: may be used with ``foreach()``, including array
+ ``never``: never returns
+ ``object``: object of any class
+ ``parent``: any of the parent class of the current class, excluding it
+ ``self``: the current class
+ ``static``: the current called class

Other special types are the scalar types.
```php
<?php

    function foo(iterable $i) : never {
        foreach ($i as $j) {
            echo $j;
        }
    
        die();
    }

?>
```

## See Also

+ [An Exhaustive Guide to Understanding and Using PHP Data Types](https://medium.com/@berastis/an-exhaustive-guide-to-understanding-and-using-php-data-types-b56f6863c637)

Related : [Type System](Type System), [Type System](Type System), [Mixed](Mixed), [Void](Void), [Callables](Callables), [Iterable](Iterable), [Never Type](Never Type), [Object](Object), [parent](parent), [static](static), [Self](Self)
