# preg\_split()
``preg_split()`` splits strings with a regular expression. 

That function allows for complex splitting of strings, including capturing the separators. For simpler splits where the separator is a static value, use ``explode()``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_split.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_split.html","name":"preg_split()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"preg_split() splits strings with a regular expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_split.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/explode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/preg_replace.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.preg-split.php"},{"@type":"CreativeWork","name":"Getting Started with PHP\u2019s preg_split() Function","url":"https:\/\/clouddevs.com\/php\/preg_split-function\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"preg_split"}]}]}</script>
```php
<?php

$sentence = 'hypertext language, programming';

$keywords = preg_split('/[\s,]+/', $sentence);
// ['hypertext', 'language', 'programming']

// This needs the parenthesis in the regex. Multiple parenthesis are possible.
$separators = preg_split('/([\s,]+)/', $sentence, flags: PREG_SPLIT_DELIM_CAPTURE);
// ['hypertext', ' ', 'language', ', ', 'programming']
print_r($separators);

$words = explode(' ', $sentence);
// ['hypertext', 'language,', 'programming']
// comma is still collected

?>
```

**[Documentation](https://www.php.net/manual/en/function.preg-split.php)**
## See Also

+ [Getting Started with PHP’s preg_split() Function](https://clouddevs.com/php/preg_split-function/)

## Related

+ [explode()](explode.html)
+ [preg\_replace()](preg_replace.html)
