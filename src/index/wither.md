# Class Wither Method
``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself. The ``with`` prefix may be added to any property name, virtual or concrete.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wither.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wither.html","name":"Class Wither Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``with`` is a prefix, that tells the reader that the method returns a copy of the object, and not the object itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Class Wither Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Class Wither Method"}]}]}</script>
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

+ [Class](class.html)
+ [Class Setter Method](setter.html)
+ [Class Getter Method](getter.html)
+ [Immutable](immutable.html)
