# Magic Values
A magic value is a literal value that appears in the code without a clear explanation of its meaning.

Similar to magic numbers, magic values can be strings, arrays, or other literal types. They should be replaced with named constants or configuration values to improve readability and maintainability.
```php
<?php

    // Magic string value
    $role = 'admin';
    
    // Better: use a constant
    const ROLE_ADMIN = 'admin';
    $role = ROLE_ADMIN;

?>
```

Related : [Magic Numbers](Magic Numbers), [Hard Coded](Hard Coded), [Constants](Constants), [Code Smell](Code Smell), [Readability](Readability)
