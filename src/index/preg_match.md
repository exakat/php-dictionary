# Preg\_match
``preg_match()`` searches a string for a match to the regular expression given in pattern.

``preg_match()`` only returns the first found match. When several matches are expected, use this function recursively with the ``$offset`` pattern, or call ``preg_match_all()``.

The first argument is the regex, and the second argument is the string being searched. 

The third argument, when provided, receives the results of the search, if any. It also contains the capturing sub patterns results. The variable content is replaced by an array: references are also lost. When an error occurs, the variable is left intact.

An ``$offset`` argument is available, to start the search beyond the beginning of the string.

``preg_match()`` returns 1 if there is at least one matched string, and 0 otherwise. It also returns ``false`` in case of error during execution, such as invalid regex, or passing backtracking limits. It is recommended to use ``===`` with its result.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_match.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_match.html","name":"Preg_match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:23 +0000","dateModified":"Sat, 08 Aug 2026 14:32:23 +0000","description":"preg_match() searches a string for a match to the regular expression given in pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Preg_match.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"preg_match"}]}]}</script>
```php
<?php

    preg_match('/(a)/i', 'aAba', $r);
    print_r($r); // ['a', 'a']

?>
```

**[Documentation](https://www.php.net/manual/en/function.preg-match.php)**
## See Also

+ [PHP string substring detection: powerful application of preg_match](https://global.php.cn/faq/1797073498.html)

## Related

+ [Regular Expression](regex.html)
+ [Strpos() Syndrome](strpos-syndrom.html)
+ [fnmatch()](fnmatch.html)
+ [str\_contains()](str_contains.html)
+ [preg\_replace()](preg_replace.html)
