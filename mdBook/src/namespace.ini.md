# Namespaces
Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.

A namespace may not be called ``namespace``. Otherwise, its name follows the same regex than other PHP structures: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``.
```php
<?php

namespace a {
    class x {
    }
}

namespace b {
    // a second class x, although distinct from the previous one
    class x {
    }
}

?>
```

## See Also

+ [Understanding PHP Namespaces: Organising Your Code](https://medium.com/@bluznierca1/understanding-php-namespaces-organising-your-code-ba2590c5e529)

Related : [Use Alias](Use Alias), [Fully Qualified Name](Fully Qualified Name), [Subnamespaces](Subnamespaces), [Collision](Collision), [global Scope](global Scope), [Name](Name), [Namespace Name](Namespace Name), [Domain](Domain), [include](include), [Name Conventions](Name Conventions), [Naming Conflict](Naming Conflict), [Prefix](Prefix)
