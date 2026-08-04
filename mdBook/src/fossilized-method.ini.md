# Fossilized Methods
A method become fossilized when it is overwritten many times, creating a difficult update of the method signature, without impacting many parts of the code.

The easiest solution to this situation is to refrain from updating the signature anymore. At that point, the method is fossilized.

```php
<?php

class x {
    function foo(A $a) : array {}
}

class y1 extends x {
    function foo(A $a) : array {}
}

class y2 extends x {
    function foo(A $a) : array {}
}

// Updating this method means updating y2, y1, x... 
class yN extends x {
    function foo(A $a) : array {}
}

?>
```

## See Also

+ [Method fossilisation](https://www.exakat.io/en/method-fossilisation/)

Related : [Method](Method)
