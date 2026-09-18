# Missing Subpattern
Final subpatterns, when not used by a regex to succeed, are omitted from the result. This happens as PHP optimizes the last results, and do not report non-finding subpatterns. 

On the other hand, the program may expect the subpatterns to be available, albeit empty. Generally speaking, subpatterns are actually filled when the regex succeed. 

The safe solution is to use the PREG_UNMATCHED_AS_NULL flag, which makes sure they are always provided.

This situation applies to ``preg_match()`` and ``preg_match_all()``. It also applies to the ``?`` and ``*`` quantifiers, when they are used on a subpattern, at the end of the regex. Non-terminal subpatterns are provided, to avoid confusion with the following ones.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-subpattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-subpattern.html","name":"Missing Subpattern","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 17 Sep 2026 07:47:00 +0000","dateModified":"Thu, 17 Sep 2026 07:47:00 +0000","description":"Final subpatterns, when not used by a regex to succeed, are omitted from the result","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-subpattern.html"]}],"keywords":["classic bug","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/fr\/function.preg-match.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.37","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"missing-subpattern"}]}]}</script>
```php
<?php

    preg_match('/(a)(b)?(c)?/', 'a', $matches);
    var_dump($matches);
    // [a, a] 
    
    preg_match('/(a)(b)?(c)?/', 'a', $matches, flags: PREG_UNMATCHED_AS_NULL);
    var_dump($matches);
    // [a, a, null, null] 

?>
```

**[Documentation](https://www.php.net/manual/fr/function.preg-match.php)**
## Related

+ [Regular Expression](regex.html)
