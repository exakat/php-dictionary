# Reverse Regex
A reverse regex is a library that produces a string based on a regex. The resulting string satisfy the regex.

Such tool is good for testing, so as to find possible regexploits, or simple loopholes in the original regex.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reverse-regex.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/reverse-regex.ini.html","name":"Reverse Regex","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A reverse regex is a library that produces a string based on a regex","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Reverse Regex.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

**[Documentation](https://www.php.net/preg_match)**
## Related

+ [Regular Expression](regex.ini.html)

## Related packages

+ [icomefromthenet/reverseregex](https://packagist.org/packages/icomefromthenet/reverseregex)
+ [pointybeard/reverse-regex](https://packagist.org/packages/pointybeard/reverse-regex)
