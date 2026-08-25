# glob()
``glob()`` is a function that finds pathnames matching a pattern.

The ``glob()`` function is not related to the global keyword.

The pattern syntax follows the rules used by the shell, not regular expressions: ``*`` matches any number of characters, ``?`` matches a single character, and bracket expressions such as ``[a-z]`` match a range or set of characters. Optional flags let the caller include hidden files, sort results, or return only directories.

Because ``glob()`` reads the filesystem directly, its result depends on what is actually present on disk at the moment it is called, and it can be comparatively slow on directories with a very large number of entries. It also returns ``false`` on failure rather than throwing an exception, so callers should check the return value before iterating over it.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glob.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glob.html","name":"glob()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"glob() is a function that finds pathnames matching a pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/glob.html"]}],"keywords":["system call","file"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wildcard.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.glob.php"},{"@type":"CreativeWork","name":"PHP glob - Pattern Matching Files in PHP","url":"https:\/\/zetcode.com\/php-filesystem\/glob\/"},{"@type":"CreativeWork","name":"Glob (programming)","url":"https:\/\/en.wikipedia.org\/wiki\/Glob_(programming)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"glob"}]}]}</script>
```php
<?php

    foreach (glob("*.txt") as $filename) {
        echo "$filename size " . filesize($filename) . "\n";
    }   

?>
```

**[Documentation](https://www.php.net/manual/en/function.glob.php)**
## See Also

+ [PHP glob - Pattern Matching Files in PHP](https://zetcode.com/php-filesystem/glob/)
+ [Glob (programming)](https://en.wikipedia.org/wiki/Glob_(programming))

## Related

+ [global Scope](global.html)
+ [Star \*](star.html)
+ [Wildcard](wildcard.html)
