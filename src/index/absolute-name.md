# Absolute Name
An absolute name is a name that is independent from the current namespace. It is usually identified by the leading ``\`` sign. 

The opposite of relative name is relative name.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/absolute-name.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/absolute-name.html","name":"Absolute Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"An absolute name is a name that is independent from the current namespace","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Absolute Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

namespace A {
    function B() {}
    
    class C {}

}

namespace B {
    //absolute name to call a function
    \A\B();
    
    //absolute name to create an object
    new \A\C();
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.basics.php)**
## Related

+ [Import](import.ini.html)
+ [Relative Name](relative-name.ini.html)
+ [Namespaced Name](namespaced-name.ini.html)
