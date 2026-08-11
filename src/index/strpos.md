# strpos
``strpos()`` is a built-in PHP function that finds the position of the first occurrence of a string inside another string.

It is often used to check if a string contains another string. When the presence of the string is the main goal of the check, it is advantageously replaced by ``str_contains()``, ``str_start_with()`` or ``str_end_with()``. Otherwise, this function is prone to the ``strpos()`` syndrome, a classic PHP trap.

``strpos()`` has a case-insensitive version called ``stripos()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos.html","name":"strpos","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``strpos()`` is a built-in PHP function that finds the position of the first occurrence of a string inside another string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strpos"}]}]}</script>
```php
<?php

    if(strpos('abc', 'b')) {
        print "The string contains a `b`.";
    } 
    
    // Error! 'a' is at position 0, which is confused with false
    if(strpos('abc', 'a')) {
        print "The string contains a `b`.";
    } 
    
    // This is OK
    if(strpos('abc', 'a') !== false) {
        print "The string contains a `b`.";
    } 

?>
```

**[Documentation](https://www.php.net/manual/en/function.strpos.php)**
## See Also

+ [Strpos - vulnerability](https://sivaramaaa.github.io/blog/prgm_vuln1.html)

## Related

+ [Strpos() Syndrome](strpos-syndrom.html)
+ [Identical Operator](identical.html)
+ [str\_contains()](str_contains.html)
+ [str\_starts\_with()](str_starts_with.html)
+ [str\_ends\_with()](str_ends_with.html)
+ [Case Sensitivity](case-insensitive.html)
+ [fnmatch()](fnmatch.html)
