# Reverse Regex
A reverse regex is a library that produces a string based on a regex. The resulting string satisfies the regex.

Such tool is good for testing, so as to find possible regexploits, or simple loopholes in the original regex.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reverse-regex.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reverse-regex.html","name":"Reverse Regex","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:41 +0000","dateModified":"Sat, 08 Aug 2026 14:32:41 +0000","description":"A reverse regex is a library that produces a string based on a regex","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Reverse Regex.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"reverse-regex"}]}]}</script>
```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

**[Documentation](https://www.php.net/preg_match)**
## Related

+ [Regular Expression](regex.html)

## Related packages

+ [icomefromthenet/reverseregex](https://packagist.org/packages/icomefromthenet/reverseregex)
+ [pointybeard/reverse-regex](https://packagist.org/packages/pointybeard/reverse-regex)
