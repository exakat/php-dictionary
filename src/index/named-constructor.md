# Named Constructors
Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments. They usually prepare the argument, to call the constructor the right way. 

That approaches makes the construction of the object simpler, and reduces the number of conditionals. 

As ``Matthias Verraes`` puts it: ``Don't limit yourself by PHP's single constructor. Use static factory methods``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/named-constructor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/named-constructor.html","name":"Named Constructors","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:31:16 +0000","dateModified":"Thu, 23 Jul 2026 13:31:16 +0000","description":"Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Named Constructors.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://localheinz.com/articles/2022/03/26/naming-constructors-in-php/)**
## See Also

+ [Named Constructors in PHP](https://verraes.net/2014/06/named-constructors-in-php/)
+ [How to mimic multiple constructors in PHP ?](https://www.geeksforgeeks.org/php/how-to-mimic-multiple-constructors-in-php/)
+ [Multiple constructors in PHP](https://www.amitmerchant.com/multiple-constructors-php/)

## Related

+ [Static Method](static-method.ini.html)
+ [Constructor](constructor.ini.html)
