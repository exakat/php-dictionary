# Program To Interface
``Program to an interface`` means the code should depend on abstractions, not concrete implementations. It should type with interfaces, not with concrete classes. 

It's one of the most important OOP design principles. Using interface allows for multiple classes of objects to be used, as long as they provide the right methods; it helps with testing, by allowing alternative mock objects; it introduce flexibility and reduce coupling.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/program-to-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/program-to-interface.html","name":"Program To Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:28:47 +0000","dateModified":"Fri, 19 Jun 2026 21:28:47 +0000","description":"Program to an interface means the code should depend on abstractions, not concrete implementations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Program To Interface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"program-to-interface"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Interface_(object-oriented_programming))**
## See Also

+ [Programming to Interface, Not to Implementation: A PHP Developer's Journey](https://notes.sohag.pro/programming-to-interface-not-to-implementation-a-php-developers-journey)

## Related

+ [Interface](interface.html)
+ [Concrete Class](concrete.html)
+ [Flexibility](flexibility.html)
+ [Coupling](coupling.html)
+ [Testable](testable.html)
