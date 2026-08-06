# glob()
``glob()`` is a function that finds pathnames matching a pattern.

The ``glob()`` function is not related to the global keyword.

The pattern syntax follows the rules used by the shell, not regular expressions: ``*`` matches any number of characters, ``?`` matches a single character, and bracket expressions such as ``[a-z]`` match a range or set of characters. Optional flags let the caller include hidden files, sort results, or return only directories.

Because ``glob()`` reads the filesystem directly, its result depends on what is actually present on disk at the moment it is called, and it can be comparatively slow on directories with a very large number of entries. It also returns ``false`` on failure rather than throwing an exception, so callers should check the return value before iterating over it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/glob.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/glob.html","name":"glob()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:28 +0000","dateModified":"Wed, 05 Aug 2026 08:17:28 +0000","description":"``glob()`` is a function that finds pathnames matching a pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/glob().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [global Scope](global.ini.html)
+ [Star \*](star.ini.html)
+ [Wildcard](wildcard.ini.html)
