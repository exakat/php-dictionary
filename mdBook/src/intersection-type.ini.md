# Intersection Type
Intersection types, also called intersectional types, is a specification syntax where several types act together as a single type. The individual types are separated with the ``&`` operator.

The value typed with an intersection type must satisfy all the types at the same time.

Intersection types only accept class and interface types: scalars, ``int``, ``string``, ``bool``, etc., ``null``, ``false``, ``true``, and ``void`` are not allowed, as a single value cannot simultaneously be of two scalar types. Redundant types are also rejected: ``A&A`` is not valid.

Intersection types work well with polymorphism: an object that implements multiple interfaces satisfies an intersection type naturally.

PHP 8.2 introduced Disjunctive Normal Form, aka DNF, types, which combine intersection and union types, such as ``(A&B)|null``.
```php
<?php

    class X {
        // Property is of type A, B and C at the same time. 
        // Two of them have to be interfaces.
        private A & B & C $property;
    }

?>
```

## See Also

+ [How the New Intersection Types in PHP 8.1 Give You More Flexibility](https://www.howtogeek.com/devops/how-the-new-intersection-types-in-php-8-1-give-you-more-flexibility/)

Related : [Type System](Type System), [Composite Type](Composite Type), [Disjunctive Normal Form (DNF)](Disjunctive Normal Form (DNF)), [Named Type](Named Type), [Relative Types](Relative Types), [Property Type Declaration](Property Type Declaration), [Union Type](Union Type), [Interface](Interface), [Polymorphism](Polymorphism), [Nullable](Nullable), [Return Type](Return Type), [TypeError](TypeError)
