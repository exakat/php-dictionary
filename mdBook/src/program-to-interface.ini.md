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

## See Also

+ [Programming to Interface, Not to Implementation: A PHP Developer's Journey](https://notes.sohag.pro/programming-to-interface-not-to-implementation-a-php-developers-journey)

Related : [Interface](Interface), [Concrete Class](Concrete Class), [Flexibility](Flexibility), [Coupling](Coupling), [Testable](Testable)
