# parent
``parent`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the first parent class, or any or their own parents. In particular, when searching for methods or properties, it may skip the direct parent, and land on one of the parent above.

``parent`` represents the first parent of the class, and then, recursively, all parents of that class. 

``parent`` is the supertype of the current class. 

In a trait, ``parent`` represents the host class's parent, not the trait own parent. In fact, the trait itself has no parent.
```php
<?php

    class W {
        protected const X = 1;
    }
    
    class X extends W {
        function foo() {
            // could also be written as \W::C; here
            return parent::C;
        }
    }

?>
```

## See Also

+ [PHP type hints: self and parent](https://madewithlove.com/blog/self-and-parent-type-hints/)

Related : [Overwrite](Overwrite), [static](static), [Self](Self), [Child Class](Child Class), [Late Static Binding](Late Static Binding), [Language Construct](Language Construct), [PHP Natives](PHP Natives), [Relative Types](Relative Types), [Special Types](Special Types), [Base Class](Base Class), [Class Hierarchy](Class Hierarchy), [Method Resolution Order (MRO)](Method Resolution Order (MRO))
