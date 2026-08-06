# Protected Visibility
The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the middle level of visibility: it restricts usage to the current class, its parents and children.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/protected.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/protected.html","name":"Protected Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Protected Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Final Keyword](final.ini.html)
+ [Visibility](visibility.ini.html)
+ [Private Visibility](private.ini.html)
+ [Public Visibility](public.ini.html)
+ [Var](var.ini.html)
