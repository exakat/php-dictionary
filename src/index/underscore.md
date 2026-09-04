# Underscore
Underscore is the ``_`` character. 

The underscore is used in integers to make them readable when the number of digit grows. 

It is also used in double, to identify PHP magic methods, such as ``__get``, ``__set``, ``__call``, etc. 

It was also used in earlier PHP versions to identify protected methods and properties: the name of the method was prefixed with ``_``. This practice is rare nowadays, and is enforced with visibility. 

Underscore used to be added to class and method names, to keep them unique. This is now a task for namespaces.

It is used as prefix with PHP superglobal variables, such as ``$_GET``, ``$_POST``. 

Underscore is also used as the numeric separators in integers and floats: it adds some breathing room in the string of digits, and makes it more readable, without changing the value.

Underscore is a valid name for a variable, a function, a constant, a method, a property. It is not valid anymore for classes and similar, since PHP 8.4. It is now reserved for future features. There is also a PHP native function called ``_()``, which belongs to the ``gettext`` extension.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html","name":"Underscore","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:47 +0000","dateModified":"Mon, 10 Aug 2026 16:53:47 +0000","description":"Underscore is the _ character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"]}],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/divisionbyzeroerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeric-separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/snake-case.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Underscore"},{"@type":"CreativeWork","name":"PHP RFC: Numeric Literal Separator","url":"https:\/\/wiki.php.net\/rfc\/numeric_literal_separator"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"underscore"}]}]}</script>
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
## See Also

+ [PHP RFC: Numeric Literal Separator](https://wiki.php.net/rfc/numeric_literal_separator)

## Related

+ [False](false.html)
+ [Comparison](comparison.html)
+ [DivisionByZeroError](divisionbyzeroerror.html)
+ [Constant Case](constant-case.html)
+ [Numeric Separator](numeric-separator.html)
+ [Snake Case](snake-case.html)
