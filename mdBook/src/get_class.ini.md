# get_class()
``get_class()`` is a PHP native function, that returns the name of the class of an object.

``get_class()`` returns the full name of the class, including its namespace and original letter cases. 

``get_class()`` may be replaced by the magic method ``__CLASS__`` when operating on ``$this``. It may also be replaced with an object in other situation, such as fetching a static constant, or instantiating a new object.
```php
<?php

namespace A\b;

class C {} 

$c = new C;
print get_class(); //A\b\C

$d = new $c;
print get_class(); //A\b\C

?>
```

Related : [__CLASS__](__CLASS__), [$this]($this), [get_class_vars()](get_class_vars()), [Introspection](Introspection)
