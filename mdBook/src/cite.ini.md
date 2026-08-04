# Class Interface Trait Enumeration (CITE)
CITE stands for Class Interface Trait Enumeration. It represents all four type of PHP structures, when they interact together. 

In particular, all four of them share the same namespaces, which may create naming conflict. This is unlike functions and constants, which both have their own namespaces.
```php
<?php

class C {}

interface I {}

trait T {}

enum E {}

const C = 1;
function C() {} 

?>
```

Related : [Class](Class), [Trait](Trait), [Interface](Interface), [Enumeration (enum)](Enumeration (enum))
