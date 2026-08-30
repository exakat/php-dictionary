---
type: "PHP Feature"
title: "Program To Interface"
description: "``Program to an interface`` means the code should depend on abstractions, not concrete implementations."
resource: "https://en.wikipedia.org/wiki/Interface_(object-oriented_programming)"
tags: ["motto"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Program To Interface

``Program to an interface`` means the code should depend on abstractions, not concrete implementations. It should type with interfaces, not with concrete classes. 

It's one of the most important OOP design principles. Using interface allows for multiple classes of objects to be used, as long as they provide the right methods; it helps with testing, by allowing alternative mock objects; it introduce flexibility and reduce coupling.

```php
<?php

    interface Customer {}
    
    class WebCustomer implements Customer {}
    
    // using an abstraction: different type of customers may be used here
    function invoice(Customer $customer) {}

    // using a concrete class: it cannot be swapped easily, unless with inheritance
    function bill(WebCustomer $customer) {}

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Interface_(object-oriented_programming)](https://en.wikipedia.org/wiki/Interface_(object-oriented_programming))

## See Also
- [Programming to Interface, Not to Implementation: A PHP Developer's Journey](https://notes.sohag.pro/programming-to-interface-not-to-implementation-a-php-developers-journey)

## Related
- [Interface](/features/interface.md)
- [Concrete Class](/features/concrete.md)
- [Flexibility](/features/flexibility.md)
- [Coupling](/features/coupling.md)
- [Testable](/features/testable.md)

