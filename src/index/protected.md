# Protected Visibility
The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the middle level of visibility: it restricts usage to the current class, its parents and children.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html","name":"Protected Visibility","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Aug 2026 05:24:15 +0000","dateModified":"Tue, 18 Aug 2026 05:24:15 +0000","description":"The protected keyword is part of the three keywords to define visibility of a method, property or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html"]}],"keywords":["keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.visibility.php"},{"@type":"CreativeWork","name":"PHP protected Keyword - Visibility Modifier in PHP","url":"https:\/\/zetcode.com\/php\/protected-keyword\/"},{"@type":"CreativeWork","name":"The Beginner's Guide to Understanding Visibility in PHP","url":"https:\/\/medium.com\/@timothyiloba\/the-beginners-guide-to-understanding-visibility-in-php-object-oriented-programming-835ea9af323a"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"protected"}]}]}</script>
```php
<?php

class W {
    public function methodY() { 
        // dependency on the child class
        echo self::X;
    }
}

class X extends W {
    protected const X = 1;
    
    public function method() { 
        echo self::X;
    }
}

class Y extends X {
    public function methodY() { 
        echo self::X;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.visibility.php)**
## See Also

+ [PHP protected Keyword - Visibility Modifier in PHP](https://zetcode.com/php/protected-keyword/)
+ [The Beginner's Guide to Understanding Visibility in PHP](https://medium.com/@timothyiloba/the-beginners-guide-to-understanding-visibility-in-php-object-oriented-programming-835ea9af323a)

## Related

+ [Final Keyword](final.html)
+ [Visibility](visibility.html)
+ [Private Visibility](private.html)
+ [Public Visibility](public.html)
+ [Var](var.html)
