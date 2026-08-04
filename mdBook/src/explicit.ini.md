# Explicit
A feature is explicit when its presence is represented in the source code.

For example, a default value for an argument is not explicit: it may be omitted, and still be used. It is called implicit. 

If that same value is written in the calling code, even if the passed value is the same as the default value, it is now explicit, and may be read in the calling code.
```php
<?php

    function foo($a = 1) {}
    
    // implicit call
    foo();
    
    // explicit calls
    foo(1);  
    foo(3);

?>
```

Related : [Implicit](Implicit)
