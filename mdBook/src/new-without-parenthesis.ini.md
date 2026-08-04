# New Without Parenthesis
The ``new`` operator may be called without using the parenthesis after the class name.

The parenthesis are necessary when the constructor requires at least one argument. They are optional when no argument is necessary.

It is usually recommended to always use the parenthesis, to keep the syntax consistent across various situations.

This should not be confused with chaining new without parenthesis, where the parenthesis are enclosing the ``new`` call.
```php
<?php

class X { } // no constructor, no argument

new X;
new X();
new X(2); // possible, but useless

class Y { 
    function __construct($i = 0) {}
} 

new Y;
new Y();
new Y(2); 

class Z { 
    function __construct($h, $i = 0) {}
} 

new Y(1);
new Y(1, 2);

?>
```

Related : [new](new), [__invoke() Method](__invoke() Method), [Chaining New Without Parenthesis](Chaining New Without Parenthesis)
