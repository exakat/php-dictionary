# Constructor
The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments. It is called ``__construct``.

The constructor is an optional method: a class may be created without it. Though, it is very common to have it. 

Parent's constructor are not automatically called, when a child class defines a constructor. They have to be called explicitly. 

When a class has a parent, with a constructor, and not constructor itself, then the parent constructor is automatically called, by inheritance.

A constructor may have a visibility, and be not available to the outside. In particular, when creating named constructors, the magic method ``__construct`` is usually made ``private`` and object instantiation happens in a static method of that same class.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constructor.html","name":"Constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The constructor is a magic method in a class, which is called at instantiation of an object, with the provided arguments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Constructor.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"constructor"}]}]}</script>
```php
<?php

    class X {
        private $property;
        
        function __construct($value) {
            $this->property = $value;
        }
    }
    
    $x = new X(1);

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.decon.php)**
## See Also

+ [What and Why We Should Use PHP Constructors](https://laracasts.com/discuss/channels/php/what-and-why-we-should-use-php-constructors)
+ [PHP OOP Constructor: How It Works in a Class with Examples](https://flatcoding.com/tutorials/php/php-oop-constructors-guide/)
+ [Constructor in PHP: Syntax, Types, Examples](https://www.scientecheasy.com/2025/11/constructor-in-php.html/)

## Related

+ [Destructor](destructor.html)
+ [Inheritance](inheritance.html)
+ [Visibility](visibility.html)
+ [Named Constructors](named-constructor.html)
+ [Autowiring](autowiring.html)
+ [instance](instance.html)
+ [Promoted Properties](promoted-property.html)
