# Delimiter
Delimiters are specific characters that start and end a specific area. They are used in structured datasets, to identify a special value among others.

Delimiters are a kind of separator: while separators are the boundary between two distinct values, delimiters frame them with a beginning and an end.

Delimiters may be the same at the beginning and the end. For example, single or double quotes for strings. Or the classic ``/`` for regexes, which may actually be any non-alpha-numeric character.

Delimiters may be different at the beginning and the end. For example, parentheses ``()`` and curly braces ``{}``, or the PHP tags, ``<?php  ?>``.

Inside the structure, the delimiters are forbidden, to avoid confusing them with the actual limits of the data. If the delimiter characters are needed inside the structure, they may be escaped with another character, such as the backslash inside strings ``'\''``; the delimiters may be replaced by another delimiter, such as in regex where a lot of delimiters are possible; they may also be deactivated with options, such as ``\Q`` and ``\E`` in regexes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delimiter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delimiter.html","name":"Delimiter","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:50:40 +0000","dateModified":"Tue, 11 Aug 2026 20:50:40 +0000","description":"Delimiters are specific characters that start and end a specific area","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delimiter.html"]}],"keywords":["syntax","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Delimiter"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"delimiter"}]}]}</script>
```php
<?php

    // delimiters for strings
    echo '';
    
    // special options in regexes
    print preg_match('/^\Q'.$regex.'\E$/i', 'tests') ? 'match' : 'nomatch';

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Delimiter)**
## Related

+ [Separator](separator.html)
