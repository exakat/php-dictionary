# Absolute Name
An absolute name is a name that is independent from the current namespace. It is usually identified by the leading ``\`` sign. 

The opposite of relative name is relative name.
```php
<?php

namespace A {
    function B() {}
    
    class C {}

}

namespace B {
    //absolute name to call a function
    \A\B();
    
    //absolute name to create an object
    new \A\C();
}

?>
```

Related : [Import](Import), [Relative Name](Relative Name), [Namespaced Name](Namespaced Name)
