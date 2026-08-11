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

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html","name":"fnmatch()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``fnmatch()`` is a matching native function: it applies the shell wildcard patterns to a string, and returns if it matches or not","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fnmatch"}]}]}</script>
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

+ [str\_contains()](str_contains.html)
+ [strpos](strpos.html)
+ [Preg\_match](preg_match.html)
+ [Star \*](star.html)
+ [Bang !](bang.html)
+ [Square Brackets](square-bracket.html)
+ [Question Mark ?](question-mark.html)
+ [Backslash \\](back-slash.html)
