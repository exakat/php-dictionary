# Package-Level
Package-level, or internal, visibility is an access modifier that sits between ``public`` and ``private``: a member marked this way, such as Java's default, no-modifier, visibility or Kotlin's and C#'s ``internal``, is reachable from any code within the same package, module, or compiled assembly, but not from outside it. It lets a library share implementation details across its own files without exposing them as part of its public API.

This gives a third, coarser-grained boundary than the usual class-based ``private``/``protected`` pair: visibility scoped to a whole group of files that ship and evolve together, rather than to a single class and its subclasses.

Package level is also called internal visibility.

PHP's visibility modifiers, ``public``, ``protected``, and ``private``, are all scoped to the class hierarchy, never to a namespace, directory, or package. There is no modifier that means visible within this namespace, or within this Composer package, but not outside it; a symbol is either fully public to any caller that can reach its fully qualified name, or restricted to the declaring class and its subclasses.
```php
<?php

    namespace App\Billing;
    
    class Invoice {
        // No modifier means reachable only from App\\Billing in Java;
        // in PHP, only public, protected, and private exist, all class-scoped.
        public function total(): float { /* ... */ }
    }

?>
```

Related : [Visibility](Visibility), [Public Visibility](Public Visibility), [Private Visibility](Private Visibility), [Protected Visibility](Protected Visibility), [Namespaces](Namespaces), [Module System with Explicit Exports](Module System with Explicit Exports)
