# Backed
A backed structure has several meanings: 

+ Backed enumeration: an enumeration that has an integer or string value
+ Backed property: a property with a hook, that actually stores the value in the property.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backed.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backed.ini.html","name":"Backed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:53 +0000","dateModified":"Fri, 19 Jun 2026 21:24:53 +0000","description":"A backed structure has several meanings: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Backed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    enum E : int {
        case A = 1;
    }
    
    class X {
        private $p { get => $this->p;}
    }
    
?>
```

**[Documentation](https://www.php.net/manual/en/language.enumerations.backed.php)**
## Related

+ [Backed Enum](backed-enum.ini.html)
+ [Backed Property](backed-property.ini.html)
