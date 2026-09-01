# Perl Compatible Regular Expressions (PCRE)
PCRE is the library that supports regular expressions. It offers functions to search and replace in strings, and arrays of strings.

PHP exposes PCRE through the ``preg_*`` family of functions: ``preg_match()`` and ``preg_match_all()`` search for a pattern, ``preg_replace()`` and ``preg_replace_callback()`` substitute matches, ``preg_split()`` breaks a string apart using a pattern as the delimiter, and ``preg_quote()`` escapes special characters in user-supplied strings so they can be safely embedded in a pattern. Patterns are written as delimited strings, most commonly with ``/`` as the delimiter, and support modifiers such as ``i`` for case-insensitive matching or ``m`` for multiline mode.

PCRE patterns are considerably more expressive than the simpler POSIX regular expressions PHP used to support, via the now-removed ``ereg`` functions, offering features like lookahead and lookbehind assertions, named capture groups, and non-greedy quantifiers. Because complex patterns can be slow or, in pathological cases, exhibit catastrophic backtracking, patterns built from untrusted input deserve particular care.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcre.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcre.html","name":"Perl Compatible Regular Expressions (PCRE)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:16:54 +0000","dateModified":"Tue, 04 Aug 2026 11:16:54 +0000","description":"PCRE is the library that supports regular expressions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcre.html"]}],"keywords":["acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.pcre.php"},{"@type":"CreativeWork","name":"PCRE - Perl Compatible Regular Expressions","url":"https:\/\/www.pcre.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pcre"}]}]}</script>
```php
<?php

    preg_match('/PHP is (.*?)\./', 'PHP is fantastic.', $r);

    print $r[1]; // fantastic

?>
```

**[Documentation](https://www.php.net/manual/en/book.pcre.php)**
## See Also

+ [PCRE - Perl Compatible Regular Expressions](https://www.pcre.org/)

## Related

+ [Regular Expression](regex.html)
