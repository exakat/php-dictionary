# Child Class
A child class is a class that extends another class. There is no specific keyword related to child classes: unlike ``parent`` which is unique and defined, any class that extends a class is its child.

A child class may be the direct child of a class, or any of the own child.
```php
<?php

// parent class
class V { }

// child class
class W extends V {}

// child class of V
// child class of W
class X extends W {}

?>
```

Related : [Overwrite](Overwrite), [static](static), [Self](Self), [Late Static Binding](Late Static Binding), [Base Class](Base Class), [Method Resolution Order (MRO)](Method Resolution Order (MRO)), [parent](parent), [Subclass](Subclass)
