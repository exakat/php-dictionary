# Fully Qualified Name
A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function: it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.
```php
<?php

namespace A {
    const B = 1;
    
    function foo() {
        // This is a local name: the namespace A is optional. 
        // The fully qualified name is \A\B;
        echo B;
        
        // This is a fully qualified name
        echo \A\B;
    }
}
?>
```

Related : [Use](Use), [Namespaces](Namespaces), [Relative Types](Relative Types), [Absolute Value](Absolute Value), [Absolute](Absolute), [Identifier](Identifier), [Relative](Relative)
