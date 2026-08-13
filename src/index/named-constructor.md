# Named Constructors
Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments. They usually prepare the argument, to call the constructor the right way. 

That approaches makes the construction of the object simpler, and reduces the number of conditionals. 

As ``Matthias Verraes`` puts it: ``Don't limit yourself by PHP's single constructor. Use static factory methods``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-constructor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-constructor.html","name":"Named Constructors","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Named constructor is a class organisation, where several static factories are created to instantiate the object, based on arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Named Constructors.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"named-constructor"}]}]}</script>
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

+ [Static Method](static-method.html)
+ [Constructor](constructor.html)
