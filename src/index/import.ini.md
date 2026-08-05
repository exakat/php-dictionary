# Import
Imports are elements of a different namespaces, brought into the current one. They rely on the ``use`` expression, usually at the beginning of the file.

Once a class, interface, trait, enum, function or constant has been imported, it is available in the current namespace. It may also use another name, also called alias.

Import is sometimes mistaken with inclusion, which bring in code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/import.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/import.ini.html","name":"Import","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Imports are elements of a different namespaces, brought into the current one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Import.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    namespace A;
    
    // import classes
    use B\C; 
    use D\E as F; 
    // import function
    use function A\foo; 
    // import constants
    use const A\D;
    
    // call an imported function with an imported constant
    foo(D); 

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## See Also

+ [Avoiding Imports and Aliases in PHP](https://localheinz.com/articles/2020/05/19/avoiding-imports-and-aliases-in-php/)
+ [6 good practices for ‘use’ in PHP](https://www.exakat.io/6-good-practices-for-use/)

## Related

+ [Relative Name](relative-name.ini.html)
+ [Absolute Name](absolute-name.ini.html)
+ [Global Space](global-space.ini.html)
+ [Namespaced Name](namespaced-name.ini.html)
