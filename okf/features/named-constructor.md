---
type: "PHP Feature"
title: "Named Constructors"
description: "Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments."
resource: "https://localheinz.com/articles/2022/03/26/naming-constructors-in-php/"
tags: ["class", "pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Named Constructors

Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments. They usually prepare the argument, to call the constructor the right way. 

That approaches makes the construction of the object simpler, and reduces the number of conditionals. 

As ``Matthias Verraes`` puts it: ``Don't limit yourself by PHP's single constructor. Use static factory methods``.

```php
<?php

    // parse a single string
    $user = Person::createFromTitle('Mr John Smith');
    
    $user = Person::createFromNames('John', 'Smith');
    
    class Person {
        // constructor is private, $parameters are not documented
        private function __construct( ) {}
        
        static public function createFromNames(string $firstName, string $lastName) : self {
            // assign the argument to the right parameter of the constructor
        }
    
        static public function createFromTitle(string $fullName) : self {
            // parse the string, and calls the constructor
        }
    }

?>
```

## Documentation
- [https://localheinz.com/articles/2022/03/26/naming-constructors-in-php/](https://localheinz.com/articles/2022/03/26/naming-constructors-in-php/)

## See Also
- [Named Constructors in PHP](https://verraes.net/2014/06/named-constructors-in-php/)
- [How to mimic multiple constructors in PHP ?](https://www.geeksforgeeks.org/php/how-to-mimic-multiple-constructors-in-php/)
- [Multiple constructors in PHP](https://www.amitmerchant.com/multiple-constructors-php/)

## Related
- [Static Method](/features/static-method.md)
- [Constructor](/features/constructor.md)

