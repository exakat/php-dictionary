# Relative Types
Relative types are types that are not explicit, but relative to the current class. There are three relative types: 

+ ``static``: this represents the current calling class. It is important when the class is not directly called, but one of its children is. 
+ ``self``: this represents the current class, at compilation time. 
+ ``parent``: this represents the first available parent of the current class. It usually is the direct parent, but may skip classes when the requested resource is not available, as in method calls.
```php
<?php

    class X extends Y {
        function foo() : self {}
        function hoo() : static {}
        function ioo() : parent {}    
    }

?>
```

Related : [Scalar Types](Scalar Types), [Union Type](Union Type), [Literal Types](Literal Types), [Intersection Type](Intersection Type), [Disjunctive Normal Form (DNF)](Disjunctive Normal Form (DNF)), [Self](Self), [static](static), [parent](parent), [Type System](Type System), [Fully Qualified Name](Fully Qualified Name), [Relative](Relative)
