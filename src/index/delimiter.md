# Delimiter
Delimiters are specific characters that starts and ends a specific area. They are used in structured dataset, to identify a special value among others.

Delimiters are a kind of separators: while separators are the boundary between two distinct values, delimiters frame them with a beginning and an end.

Delimiters may be the same at the beginning and the end. For examples, single or double quotes for strings. Or the classic ``/`` for regexes, which may actually be any non-alpha-numeric character.

Delimiters may be the different at the beginning and the end. For examples, parenthesis ``()`` and curly braces ``{}``, or the PHP tags, ``<?php  ?>``. 

Inside the structure, the delimiters are forbidden, to avoid confusing them with the actual limits of the data. If the delimiter characters are needed inside the structure, they may be either escaped with another character, such as backslash inside strings ``'\''``; the delimiters may be replaced by another delimiter, such as in regex where a lot of delimiters are possible; they may also be deactivates with options, such as ``\Q`` and ``\E`` in regexes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delimiter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delimiter.html","name":"Delimiter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:23:15 +0000","dateModified":"Mon, 03 Aug 2026 16:23:15 +0000","description":"Delimiters are specific characters that starts and ends a specific area","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Delimiter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Delimiter"}]}]}</script>
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
