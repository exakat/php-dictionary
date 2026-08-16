# Strpos() Syndrome
The ``strpos()`` syndrome is a classic bug: ``strpos()`` searches for a string inside another string. It reports its index upon finding it, or false, if the string was not found.

PHP's string are indexed starting with 0, so the found string might be in an index from 0 to the size of the string. 

PHP also cast 0 to false. And false is also the value that is returned when the string is not found. So, if the found string is at the very beginning of the searched string, it might be confused for its absence.

To avoid confusion, it is recommended to make an explicit comparison with false, using ``===`` or ``!==``.

Note that many PHP native functions behave that way, and should be treated with the same precaution.

In the case of ``strpos()``, it may be replaced with ``str_contains()``, since PHP 8.0, or a regex, to get safer results.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos-syndrom.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos-syndrom.html","name":"Strpos() Syndrome","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The strpos() syndrome is a classic bug: strpos() searches for a string inside another string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Strpos() Syndrome.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strpos-syndrom"}]}]}</script>
```php
<?php

    $haystack = 'abcdef';
    
    if (strpos($haystack, 'b')) {
        print "The haystack contains a 'b'\n";
    }
    
    if (strpos($haystack, 'a')) {
        print "The haystack contains an 'a'\n";
    } else {
        print "The haystack doesn't contain an 'a'\n";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.strpos.php)**
## See Also

+ [The Hidden Pitfalls: Why empty(), strpos(), and More Are Often Misunderstood](https://medium.com/@jorisvdaalsvoort/the-hidden-pitfalls-why-empty-strpos-and-more-are-often-misunderstood-43800c88be33)

## Related

+ [Bug](bug.html)
+ [array\_search](array_search.html)
+ [json\_decode()](json_decode.html)
+ [Preg\_match](preg_match.html)
+ [strpos](strpos.html)
