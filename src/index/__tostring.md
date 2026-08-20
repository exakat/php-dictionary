# \_\_toString() Method
``__tostring()`` is a magic method: it is called when the object has to be converted into a string.

That way, it is possible to dynamically convert the object to a string and display it, or transmit it to another part of the application. 

``__toString()`` is called when ``strict_types`` is not active. Otherwise, passing an object to a string parameter yields an error: it requires an explicit type cast.

``__toString()`` is always called in concatenation, and string interpolation.

There is no magic method to convert an object to another type.

``__toString()`` must be declared ``public``, take no arguments, and return a ``string``: returning anything else triggers a fatal error, or a ``TypeError`` when a ``: string`` return type is declared.

Since PHP 8.0, any class that defines ``__toString()`` automatically implements the ``Stringable`` interface, without having to declare it explicitly.

Since PHP 7.4, exceptions may be thrown from within ``__toString()``; in earlier versions, doing so resulted in a fatal error.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__tostring.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__tostring.html","name":"__toString() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"__tostring() is a magic method: it is called when the object has to be converted into a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__toString() Method.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict_types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concatenation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stringable.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php"},{"@type":"CreativeWork","name":"PHP __toString","url":"https:\/\/www.phptutorial.net\/php-oop\/php-__tostring\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__tostring"}]}]}</script>
```php
<?php

    class X {
        private $r = 'S';
        private $p = 1;
        private $q = 2;
    
        // Checks the dictionary, or return 0
        function __toString() : string {
        
            // $this->r is used as is
            // $this->p is formatted with quotes
            // $this->q is converted to other values
            return "$this->r '$this->p' ".($this->q ? 'A' : 'B');
        }
    }
    
    echo new X;
    
    $y = (string) new X;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [PHP __toString](https://www.phptutorial.net/php-oop/php-__tostring/)

## Related

+ [strict\_types](strict_types.html)
+ [Magic Methods](magic-method.html)
+ [Cast Operator](cast.html)
+ [Concatenation \\.](concatenation.html)
+ [Stringable](stringable.html)
