# Relative Name
A relative name is a name that is completed by the current namespace to lead to the definition of the referenced structure.

Relative names usually start without the leading ``\``. In the case of names with a single name, it is either a relative name, or a local import.

The opposite of relative name is absolute name.
```php
<?php

namespace B\A {
    function B() {}
    
    class C {}

}

namespace B {
    use A\B as C;
    //import 
    new C();

    // relative name
    new A\C(); // actually calls B \ A\C
}

?>
```

Related : [Import](Import), [Absolute Name](Absolute Name), [Identifier](Identifier), [Namespaced Name](Namespaced Name)
