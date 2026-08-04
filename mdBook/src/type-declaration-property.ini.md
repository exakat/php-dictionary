# Property Type Declaration
Type declaration property, also known as typed properties, is a feature introduced in version 7.4 that allows specifying the type of a class property.

With typed properties, the type of a property is explicitly defined, ensuring that only values of the specified type can be assigned to that property. This helps enforce type safety and prevents accidental assignments of incompatible values.

Typed properties support any type format: simple, union, intersection or DNF. Nullable types are expressed with a leading ``?``, such as ``?string``.

A typed property that has not been initialized before it is read triggers an ``Error`` exception. Typed properties must be explicitly assigned before use, either in the constructor or at the declaration site.

Since PHP 8.1, typed properties may also be declared ``readonly``, which prevents any assignment after the initial one.

```php
<?php

    class X {
        private Typed $y;
    }

?>
```

Related : [Type System](Type System), [Union Type](Union Type), [Intersection Type](Intersection Type), [Disjunctive Normal Form (DNF)](Disjunctive Normal Form (DNF)), [Readonly](Readonly), [Nullable](Nullable), [Properties](Properties), [Uninitialized](Uninitialized), [TypeError](TypeError), [Return Type](Return Type), [Promoted Properties](Promoted Properties), [Property Hook](Property Hook), [Asymmetric Visibility](Asymmetric Visibility), [static](static), [Var](Var)
