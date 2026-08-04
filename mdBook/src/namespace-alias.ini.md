# Namespace Alias
PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces. 

This makes the code shorter, as the imported structure can be called with its alias name, instead of the fully qualified name. 

Aliasing solves naming conflicts, by giving another local name to any structure.
```php
<?php

namespace a {
    class x {
    }
}

namespace b {
    use a\x as aX;
}

?>
```

Related : [Use Alias](Use Alias)
