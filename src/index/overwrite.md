# Overwrite
Overwriting is the process to replace an existing structure, with another one, entirely different. The replaced structure may be a method, a property, class constant, a variable. The first ones are related to OOP programming and inheritance, the latter is variable behavior.

Overwriting is applicable to constants, methods and properties. Methods still should have a compatible signature with their parent's equivalent, while properties and constants may change their default value.

Overwriting methods is prevented by the ``final`` keyword, or the ``private`` visibility.

Overwriting is also called overloading.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overwrite.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overwrite.html","name":"Overwrite","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Overwriting is the process to replace an existing structure, with another one, entirely different","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Overwrite.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"overwrite"}]}]}</script>
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
## See Also

+ [PHP: The final Keyword - Manual](https://www.php.net/manual/en/language.oop5.final.php)
+ [How to Override Method in PHP](https://www.phptutorial.net/php-oop/php-override-method/)

## Related

+ [Final Keyword](final.html)
+ [Private Visibility](private.html)
+ [Inheritance](inheritance.html)
+ [Override Attribute](override.html)
+ [Assignations](assignation.html)
+ [Child Class](child-class.html)
+ [Overriding](overriding.html)
+ [parent](parent.html)
