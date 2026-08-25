# Import
Imports are elements of a different namespaces, brought into the current one. They rely on the ``use`` expression, usually at the beginning of the file.

Once a class, interface, trait, enum, function or constant has been imported, it is available in the current namespace. It may also use another name, also called alias.

Import is sometimes mistaken with inclusion, which bring in code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/import.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/import.html","name":"Import","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Imports are elements of a different namespaces, brought into the current one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/import.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-space.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/namespaced-name.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"Avoiding Imports and Aliases in PHP","url":"https:\/\/localheinz.com\/articles\/2020\/05\/19\/avoiding-imports-and-aliases-in-php\/"},{"@type":"CreativeWork","name":"6 good practices for \u2018use\u2019 in PHP","url":"https:\/\/www.exakat.io\/6-good-practices-for-use\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"import"}]}]}</script>
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

+ [Relative Name](relative-name.html)
+ [Absolute Name](absolute-name.html)
+ [Global Space](global-space.html)
+ [Namespaced Name](namespaced-name.html)
