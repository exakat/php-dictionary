# Class Wither Method
``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself. The ``with`` prefix may be added to any property name, virtual or concrete.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wither.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wither.html","name":"Class Wither Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Class Wither Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x {
    private A $property;
    
    // getter
    public function getProperty() : A {
        return $this->property;
    }

    // wither
    public function withProperty() : A{
        return clone $this->property;
    }
}

?>
```

**[Documentation](https://projectlombok.org/features/With)**
## See Also

+ [RFC: Accessors](https://wiki.php.net/rfc/property_accessors)

## Related

+ [Class](class.ini.html)
+ [Class Setter Method](setter.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [Immutable](immutable.ini.html)
