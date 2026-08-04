# Backed Property
A backed property is a property with a hook, that actually uses the eponymous property to store the value.

The opposite of a backed property is a virtual property.
```php
<?php

class X {
    public $p { get => $this->p; }
}

?>
```

Related : [Virtual Property](Virtual Property), [Backed](Backed)
