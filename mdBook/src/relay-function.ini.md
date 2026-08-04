# Relay Function
A relay function, or a relay method, is a function that calls another function, with the same arguments. It is merely relaying the arguments from one to the other.

A relay function also returns the value of the relayed function.

A relay function does not add any added value over the other function, except a renaming of the feature.

Relay functions may be nested several levels, depending on the situation.
```php
<?php

    function foo($a) {
        return goo($a);
    }
    
    function goo($a) {
        return hoo($a);
    }
    
    function hoo($a) {
        return doSomething();
    }

?>
```

Related : [Functions](Functions), [Method](Method), [Direct Output](Direct Output), [Flexibility](Flexibility)
