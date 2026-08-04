# Readable
Something is readable when its current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, constants, class constants with the correct visibility, array elements are readable.

Files are another object that requires permissions. This time, the operating system provides the permissions. A file is readable when the ``is_readable()`` function returns true.

```php
<?php

    $x = 3;
    echo $x;

?>
```

Related : [Visibility](Visibility), [Variables](Variables), [Static Property](Static Property), [Properties](Properties), [Container](Container), [Array Element](Array Element), [Writeable](Writeable), [Technical Debt](Technical Debt), [fopen()](fopen()), [Maintenability](Maintenability), [Writable](Writable), [Floating Point Numbers](Floating Point Numbers)
