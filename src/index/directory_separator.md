# DIRECTORY\_SEPARATOR
The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path. 

``DIRECTORY_SEPARATOR`` is ``/`` most of the time. On Windows, it may be ``\``, although ``/`` is also valid at the same time, for compatibility reasons.

Using ``DIRECTORY_SEPARATOR`` to build paths or split a string into its components, means that the resulting data is valid on every underlying system.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directory_separator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directory_separator.html","name":"DIRECTORY_SEPARATOR","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:22 +0000","dateModified":"Mon, 17 Aug 2026 09:06:22 +0000","description":"The DIRECTORY_SEPARATOR constant provides the character to distinguish one directory from the next, in a path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DIRECTORY_SEPARATOR.html"]}],"keywords":["native constant","portability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystem.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/portability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivedirectoryiterator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/dir.constants.php#constant.directory-separator"},{"@type":"CreativeWork","name":"Portable PHP code: DIRECTORY_SEPARATOR is not necessary","url":"https:\/\/alanhogan.com\/tips\/php\/directory-separator-not-necessary"},{"@type":"CreativeWork","name":"Cross-platform code 3: Path and line separators","url":"http:\/\/www.hackingwithphp.com\/19\/7\/5\/cross-platform-code-3-path-and-line-separators"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"directory_separator"}]}]}</script>
```php
<?php

    $path = 'folder' . DIRECTORY_SEPARATOR . 'subfolder' . DIRECTORY_SEPARATOR . 'file.txt';
    echo $path;

?>
```

**[Documentation](https://www.php.net/manual/en/dir.constants.php#constant.directory-separator)**
## See Also

+ [Portable PHP code: DIRECTORY_SEPARATOR is not necessary](https://alanhogan.com/tips/php/directory-separator-not-necessary)
+ [Cross-platform code 3: Path and line separators](http://www.hackingwithphp.com/19/7/5/cross-platform-code-3-path-and-line-separators)

## Related

+ [Constants](constant.html)
+ [Path](path.html)
+ [File System](filesystem.html)
+ [Portability](portability.html)
+ [PHP Constants](php-constant.html)
+ [RecursiveDirectoryIterator](recursivedirectoryiterator.html)
