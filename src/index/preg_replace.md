# preg\_replace()
``preg_replace()`` searches a string for matches of a regular expression, and replaces them with a replacement string. It is the regex-powered counterpart of ``str_replace()``, which only handles literal substrings.

The first argument is the pattern, or an array of patterns, the second is the replacement, or an array of replacements, and the third is the subject string, or an array of subjects. Captured groups from the pattern may be reused in the replacement with ``$1``, ``$2``, etc.

An optional ``limit`` argument caps the number of replacements per subject, and an optional ``count`` reference receives the total number of replacements performed. ``preg_replace()`` returns ``null`` on error, so its result should not be used without checking, especially when the pattern comes from a variable.

When the replacement needs to run arbitrary code rather than a static string, ``preg_replace_callback()`` should be used instead; the historic ``/e`` modifier that allowed code execution directly inside ``preg_replace()`` was removed in version 7.0+.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_replace.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_replace.html","name":"preg_replace()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:38:01 +0000","dateModified":"Wed, 05 Aug 2026 08:38:01 +0000","description":"preg_replace() searches a string for matches of a regular expression, and replaces them with a replacement string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_replace().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"preg_replace"}]}]}</script>
```php
<?php

    $result = preg_replace('/\s+/', ' ', 'too    many    spaces');
    // 'too many spaces'

    $result = preg_replace('/(\w+)@(\w+)/', '$2@$1', 'user@host');
    // 'host@user'

?>
```

**[Documentation](https://www.php.net/manual/en/function.preg-replace.php)**
## See Also

+ [preg_replace_callback()](https://www.php.net/manual/en/function.preg-replace-callback.php)

## Related

+ [Regular Expression](regex.html)
+ [Preg\_match](preg_match.html)
+ [preg\_split()](preg_split.html)
+ [str\_replace()](str_replace.html)
