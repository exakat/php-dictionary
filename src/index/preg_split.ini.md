# preg\_split()
``preg_split()`` splits strings with a regular expression. 

That function allows for complex splitting of strings, including capturing the separators. For simpler splits where the separator is a static value, use ``explode()``.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/preg_split.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/preg_split.ini.html","name":"preg_split()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:06 +0000","dateModified":"Wed, 05 Aug 2026 08:17:06 +0000","description":"``preg_split()`` splits strings with a regular expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/preg_split().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [explode()](explode.ini.html)
+ [preg\_replace()](preg_replace.ini.html)
