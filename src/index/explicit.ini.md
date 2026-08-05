# Explicit
A feature is explicit when its presence is represented in the source code.

For example, a default value for an argument is not explicit: it may be omitted, and still be used. It is called implicit. 

If that same value is written in the calling code, even if the passed value is the same as the default value, it is now explicit, and may be read in the calling code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/explicit.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/explicit.ini.html","name":"Explicit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A feature is explicit when its presence is represented in the source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Explicit.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    function foo($a = 1) {}
    
    // implicit call
    foo();
    
    // explicit calls
    foo(1);  
    foo(3);

?>
```

**[Documentation](https://skoop.dev/blog/2025/08/08/explicit-code/)**
## Related

+ [Implicit](implicit.ini.html)
