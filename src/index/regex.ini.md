# Regular Expression
A regular expression, or regex, is a sequence of characters that specifies a search pattern. PHP currently uses the PCRE library, and used to have 2 such libraries.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/regex.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/regex.ini.html","name":"Regular Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 04:43:21 +0000","dateModified":"Mon, 06 Jul 2026 04:43:21 +0000","description":"A regular expression, or regex, is a sequence of characters that specifies a search pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Regular Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
    print_r($matches);

?>
```

**[Documentation](https://www.php.net/preg_match)**
## See Also

+ [How to Use PHP Regular Expressions for Pattern Matching and Data Validation](https://medium.com/@olivia.j.01101001/how-to-use-php-regular-expressions-for-pattern-matching-and-data-validation-d58dacb06ea1)
+ [Getting Started with PHP Regular Expressions](https://www.jotform.com/blog/php-regular-expressions/)
+ [PHP Regular Expressions](https://thecodeforge.io/php/php-regular-expressions/)

## Related

+ [Question Mark ?](question-mark.ini.html)
+ [Regexploit](regexploit.ini.html)
+ [Reverse Regex](reverse-regex.ini.html)
+ [Star \*](star.ini.html)
+ [Wildcard](wildcard.ini.html)
+ [Escape Character](escape-character.ini.html)
+ [Perl Compatible Regular Expressions (PCRE)](pcre.ini.html)
+ [Preg\_match](preg_match.ini.html)
