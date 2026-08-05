# fnmatch()
``fnmatch()`` is a matching native function: it applies the shell wildcard patterns to a string, and returns if it matches or not.

Wildcards include: 

+ ``*`` for anything
+ ``?`` for zero or one character
+ ``[]`` for a range of characters
+ ``!`` to negate characters in a bracket syntax
+ `` \ `` as the escape character

The search is case sensitive.

This function is useful to emulate a common system of search.

Simpler search tools include ``str_contains()`` and ``strpos()``, and more complex include ``preg_match()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fnmatch.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fnmatch.ini.html","name":"fnmatch()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``fnmatch()`` is a matching native function: it applies the shell wildcard patterns to a string, and returns if it matches or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fnmatch().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $message = 'PHP rocks';
    if (fnmatch('*r[oi]cks', $message)) {
      echo 'But, of course...';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.fnmatch.php)**
## See Also

+ [Understanding and Implementing PHP's fnmatch() Function](https://reintech.io/blog/understanding-implementing-php-fnmatch-function)

## Related

+ [str\_contains()](str_contains.ini.html)
+ [strpos](strpos.ini.html)
+ [Preg\_match](preg_match.ini.html)
+ [Star \*](star.ini.html)
+ [Bang !](bang.ini.html)
+ [Square Brackets](square-bracket.ini.html)
+ [Question Mark ?](question-mark.ini.html)
+ [Backslash \\](back-slash.ini.html)
