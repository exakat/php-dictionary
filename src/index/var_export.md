# var\_export()
``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code.

``var_export()`` is used for cache, by storing an intermediate result for later inclusion. ``var_export()`` is also used for storing PHP data, and later accessing them in their current form: it by-pass the process of serializing/unserializing by using PHP as the serialization itself.

``var_export()`` is usually replaced by ``print_r()``, ``var_dump()`` or other adapted functions when it is immediately displayed, during development session.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_export.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_export.html","name":"var_export()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_export().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"var_export()"}]}]}</script>
```php
<?php

    print var_export(1); // 1
    
    print var_export(abc); // 'abc'
    
    $a = [1, 3, 4];
    $a[] = 5;
    print var_export($a); // 
    
    class X {
        public string $p = 'yes';
    }
    
    $x = new X();
    $x->p = 'PHP rocks';
    print var_export($a); // 

?>
```

**[Documentation](https://www.php.net/manual/en/function.debug-backtrace.php)**
## Related

+ [print\_r()](print_r.html)
+ [Serialization](serialization.html)
+ [Cache](cache.html)
+ [var\_dump()](var_dump.html)
