# basename()
Basename is a PHP native function that returns the name of a file, extracted from a full path. 

When passed a second parameter, basename uses it as the file extension and removes it. The file extension is then a string, and includes the dot. It is not possible to provide multiple file extensions.

``basename()`` is locale aware, so it has to match the locale of the filesystem to find and remove the extension in multiple bytes encoding.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/basename.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/basename.html","name":"basename()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 07:35:12 +0000","dateModified":"Thu, 20 Aug 2026 07:35:12 +0000","description":"Basename is a PHP native function that returns the name of a file, extracted from a full path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/basename.html"]}],"keywords":["path","native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dirname.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.basename.php"},{"@type":"CreativeWork","name":"Using the basename() Function in PHP","url":"https:\/\/pimylifeup.com\/php-basename\/"},{"@type":"CreativeWork","name":"PHP basename() Function - GeeksforGeeks","url":"https:\/\/www.geeksforgeeks.org\/php\/php-basename-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"basename"}]}]}</script>
```php
<?php

    $path = '/var/www/index.php';
    
    print basename($path); // index.php
    print basename($path, '.php'); // index 
    print basename($path, '.PHP'); // index.php
    print basename($path, 'php'); // index.

?>
```

**[Documentation](https://www.php.net/manual/en/function.basename.php)**
## See Also

+ [Using the basename() Function in PHP](https://pimylifeup.com/php-basename/)
+ [PHP basename() Function - GeeksforGeeks](https://www.geeksforgeeks.org/php/php-basename-function/)

## Related

+ [dirname](dirname.html)
