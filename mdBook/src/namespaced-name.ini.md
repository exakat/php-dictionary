# Namespaced Name
A namespaced name is a name that includes a ``\`` character.

A namespaced name may be relative or absolute. 

Namespaced names are sometimes reported in errors.
```php
<?php

namespace B\A {
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

Related : [Import](Import), [Absolute Name](Absolute Name), [Relative Name](Relative Name)
