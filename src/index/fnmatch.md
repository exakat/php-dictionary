# fnmatch()
``fnmatch()`` is a native function for matching. it applies the shell wildcard patterns to a string, and returns if it matches or not.

Wildcards include: 

+ ``*`` for anything
+ ``?`` for zero or one character
+ ``[]`` for a range of characters
+ ``!`` to negate characters in a bracket syntax
+ `` \ `` as the escape character

The search is case sensitive.

This function is useful to emulate a common system of search.

Simpler search tools include ``str_contains()`` and ``strpos()``, and more complex include ``preg_match()``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html","name":"fnmatch()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:12:36 +0000","dateModified":"Sat, 15 Aug 2026 12:12:36 +0000","description":"fnmatch() is a native function for matching","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strpos.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bang.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/square-bracket.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/question-mark.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/back-slash.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.fnmatch.php"},{"@type":"CreativeWork","name":"Understanding and Implementing PHP's fnmatch() Function","url":"https:\/\/reintech.io\/blog\/understanding-implementing-php-fnmatch-function"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fnmatch"}]}]}</script>
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
