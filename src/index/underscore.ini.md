# Underscore
Underscore is the ``_`` character. 

The underscore is used in integers to make them readable when the number of digit grows. 

It is also used in double, to identify PHP magic methods, such as ``__get``, ``__set``, ``__call``, etc. 

It was also used in earlier PHP versions to identify protected methods and properties: the name of the method was prefixed with ``_``. This practice is rare nowadays, and is enforced with visibility. 

Underscore used to be added to class and method names, to keep them unique. This is now a task for namespaces.

It is used as prefix with PHP superglobal variables, such as ``$_GET``, ``$_POST``. 

Underscore is also used as the numeric separators in integers and floats: it adds some breathing room in the string of digits, and makes it more readable, without changing the value.

Underscore is a valid name for a variable, a function, a constant, a method, a property. It is not valid anymore for classes and similar, since PHP 8.4. It is now reserved for future features. There is also a PHP native function called ``_()``, which belongs to the ``gettext`` extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/underscore.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/underscore.ini.html","name":"Underscore","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:52 +0000","dateModified":"Fri, 19 Jun 2026 21:24:52 +0000","description":"Underscore is the ``_`` character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Underscore.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$million = 1_000_000;

class _ {
    const _ = '_';
    
    function _() {
        _::$_ = _::_; 
    }
    
    private static $_ = 1;

}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Underscore)**
## Related

+ [False](false.ini.html)
+ [Comparison](comparison.ini.html)
+ [DivisionByZeroError](divisionbyzeroerror.ini.html)
+ [Constant Case](constant-case.ini.html)
+ [Numeric Separator](numeric-separator.ini.html)
+ [Snake Case](snake-case.ini.html)
