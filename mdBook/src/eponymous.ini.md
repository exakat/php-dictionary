# Eponymous
Eponymous means that it carries the same name. For example, a variable called ``$variable``, or a constant called ``CONSTANT``. 

PHP does not allow every structure to be eponymous. It is not possible to call a class ``class``, but one may call a class anonymous: this won't be eponymous, as an anonymous class doesn't have a name.
```php
<?php

    const CONSTANT = 'literal';
    
    $variable = CONSTANT;

?>
```

Related : [Naming](Naming)
