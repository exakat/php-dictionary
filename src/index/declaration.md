# Declaration
A declaration is a statement that defines a structure, such as a function, a class, method, property, etc. A declaration must occur before the usage of the declared resource.

PHP requires a declaration for some structures, and allows its omission for others. For example, a class must be declared before usage, while a variable can be used without declaration. Properties are currently being moved to a compulsory declaration.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/declaration.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/declaration.html","name":"Declaration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:00 +0000","dateModified":"Fri, 19 Jun 2026 21:24:00 +0000","description":"A declaration is a statement that defines a structure, such as a function, a class, method, property, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Declaration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// cannot call a function before defining it
foo();

function foo() {}

class x {
    function goo() {
        // This is a warning since PHP 8.2, planned to be a fatal error in PHP 9.0
        $this->undeclaredProperty = 1;
        
        // $b is undefined. It creates a warning, but the code keeps executing.
        $a = $b + 1;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.variables.basics.php)**
## Related

+ [Definition](definition.ini.html)
