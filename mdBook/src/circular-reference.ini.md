# Circular Reference
A circular reference is a situation where an object has a reference on another object, and vice versa. The circle of reference may have two or more objects. 

Circular references create limitation with the garbage collector, which require more refined checks before removing elements from memory. Usually, the garbage collector removes objects which are not referenced from another object. And, in the case of circular references, the whole circle seems to be in use. This leads to memory leaks.
```php
<?php

$a = new A();
$b = new B($a);
$a->setB($b);

class A {
    private B $b;
    
    function setB(B $b) {
        $this->b = $b;
    }
}

class B {
    private A $a;
    
    function __construct(A $a) {
        $this->a = $a;
    }
}

?>
```

## See Also

+ [PHP Closures and Generators can hold circular references](https://dev.to/gromnan/php-closures-and-generators-can-hold-circular-references-45ge)

Related : [Garbage Collection](Garbage Collection), [References](References), [Memory Leak](Memory Leak), [Memory](Memory), [Weak References](Weak References)
