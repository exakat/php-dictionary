# Class Hierarchy
The class hierarchy is a list of classes, which are extending one from another. The extended classes are parents, and the extending classes are children. Classes extending the same class are also called siblings. 

The depth of the class hierarchy is a measure of the complexity.
```php
<?php

    class A {}
    
    class B extends A {}
    
    class C extends B {}
    
    class D1 extends C {}
    class D2 extends C {}

?>
```

## See Also

+ [PHP classes](https://phplang.org/spec/14-classes)

Related : [parent](parent), [Inheritance](Inheritance)
