# Clone
Clone creates a duplicate of an object.

By default, PHP creates a shallow clone: it only make a copy of the scalars properties, and it keeps the references and any objects untouched. This means that object properties are shared between an object and its clone. 

To perform a deep clone, aka to clone an object and its referenced properties, there is the magic method ``__clone()``.

Until PHP 8.5, ``clone`` was only an operator. Ever since, it is also a native PHP function, which accepts a second argument to update the public properties. That argument prevents from using the magic method ``__clone``, although both may happen at the same time. When ``__clone`` and ``clone()`` update the same property, the ``clone()`` is applied last, and stays.

Cloning had conflict with the ``readonly`` properties, until updating readonly during the cloning operation was allowed, in version 8.5.
```php
<?php

    class X {
        protected $property = 1;
        
        function __clone() {
            $this->property = 2;
        }
    }
    
    // instantiation
    $x = new X;
    
    // cloning
    $y = clone $x;
    
    $z2 = clone($x);  // parenthesis are now useful
    echo $z2->property;  // 2
    $z3 = clone($x, ['property' => 3]);
    echo $z3->property;
    
?>
```

## See Also

+ [What happens when we clone?](https://doeken.org/blog/what-happens-when-we-clone)
+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)
+ [PHP Clone All The Things](https://jolicode.com/blog/php-clone-all-the-things)
+ [Clone version 2](https://wiki.php.net/rfc/clone_with_v2)

Related : [Shallow Clone](Shallow Clone), [Deep Clone](Deep Clone), [Readonly](Readonly), [References](References), [Object](Object), [Identity](Identity), [Object Type](Object Type)
