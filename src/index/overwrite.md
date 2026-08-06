# Overwrite
Overwriting is the process to replace an existing structure, with another one, entirely different. The replaced structure may be a method, a property, class constant, a variable. The first ones are related to OOP programming and inheritance, the latter is variable behavior.

Overwriting is applicable to constants, methods and properties. Methods still should have a compatible signature with their parent's equivalent, while properties and constants may change their default value.

Overwriting methods is prevented by the ``final`` keyword, or the ``private`` visibility.

Overwriting is also called overloading.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/overwrite.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/overwrite.html","name":"Overwrite","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Overwriting is the process to replace an existing structure, with another one, entirely different","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Overwrite.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    const Y = 1;
    const Z = 2;
}

class xx extends x {
    // Z is inherited, and its value is 2    
    // Y used to be 1, it is now 31
    const Y = 31;
    const A = 3;
}

$a = 1; 
$a = 2; // The first value of $a is overwritten

// a silent overwrite
$a = function() use ($a) {}; 

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.inheritance.php)**
## Related

+ [Final Keyword](final.ini.html)
+ [Private Visibility](private.ini.html)
+ [Inheritance](inheritance.ini.html)
+ [Override Attribute](override.ini.html)
+ [Assignations](assignation.ini.html)
+ [Child Class](child-class.ini.html)
+ [Overriding](overriding.ini.html)
+ [parent](parent.ini.html)
