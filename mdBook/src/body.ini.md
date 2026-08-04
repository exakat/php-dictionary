# Body
The body, of a function or a command, is the related block that is commanded by the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. As an abstract method is only its signature, the body is replaced by a semi colon ``;``.
```php
<?php

    abstract class X {
        function foo() {
            // This block is the body
        }
    
        // No body for an abstract method
        abstract function goo();
    }

?>
```

Related : [Block](Block), [Semicolon ;](Semicolon ;)
