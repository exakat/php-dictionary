# pathinfo()
``pathinfo()`` is a native PHP function that returns information about a file path: its directory name, base name, extension and file name.

By default, it returns an associative array with the keys ``dirname``, ``basename``, ``extension``, though only when the file has one, and ``filename``. The optional second argument selects a single element, using the constants ``PATHINFO_DIRNAME``, ``PATHINFO_BASENAME``, ``PATHINFO_EXTENSION`` or ``PATHINFO_FILENAME``; in that case, the function returns a string instead of an array.

The function works on the path string only: it does not check that the file exists.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pathinfo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pathinfo.html","name":"pathinfo()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 17:23:28 +0000","dateModified":"Fri, 09 Oct 2026 17:23:28 +0000","description":"pathinfo() is a native PHP function that returns information about a file path: its directory name, base name, extension and file name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pathinfo.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/basename.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dirname.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.pathinfo.php"},{"@type":"CreativeWork","name":"pathinfo","url":"https:\/\/www.php.net\/manual\/en\/function.pathinfo.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pathinfo"}]}]}</script>
```php
<?php

    $info = pathinfo('/www/htdocs/index.html');
    // ['dirname' => '/www/htdocs', 'basename' => 'index.html', 'extension' => 'html', 'filename' => 'index']

    echo pathinfo('/www/htdocs/index.html', PATHINFO_EXTENSION); // html

    echo pathinfo('/www/htdocs/archive.tar.gz', PATHINFO_FILENAME); // archive.tar

?>
```

**[Documentation](https://www.php.net/manual/en/function.pathinfo.php)**
## See Also

+ [pathinfo](https://www.php.net/manual/en/function.pathinfo.php)

## Related

+ [basename()](basename.html)
+ [dirname](dirname.html)
