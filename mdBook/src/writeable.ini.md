# Writeable
Something is writeable when its current value may be modified. For example, a variable is writeable, as it may be changed at any moment: it may be unset, appended, prepended, replaced, or incremented. 

On the other hand, a property may be unwriteable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, array elements are all writeable. To check if a property is writeable or not, one should use the reflection engine. Most often, it is base on code knowledge.

Properties may be ``readonly``, which means they can be written once, and won't change value later. Modification limiting, and fine grained access may be achieved with property hooks.

Writeable also applies to files, as the operating system may or may not allow the modification of files. This may be checked with ``is_writeable()`` function.

```php
<?php

    $v = 3;
    ++$v; // $v was incremented
    
    class X {
        private int $p;
        
        function __construct() {
            // The property p is writeable in this part of the code
            $this->p = 1;
        }
    }
    
    $x = new X();
    // The property p is not writeable from this part of the code

?>
```

Related : [Visibility](Visibility), [Variables](Variables), [Static Property](Static Property), [Properties](Properties), [Container](Container), [Array Element](Array Element), [Readable](Readable), [Reflection](Reflection), [Readonly](Readonly), [Property Hook](Property Hook), [fopen()](fopen())
