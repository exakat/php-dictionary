# Regular Expression
A regular expression, or regex, is a sequence of characters that specifies a search pattern. PHP currently uses the PCRE library, and used to have 2 such libraries.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html","name":"Regular Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A regular expression, or regex, is a sequence of characters that specifies a search pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Regular Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Regular Expression"}]}]}</script>
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

+ [Question Mark ?](question-mark.html)
+ [Regexploit](regexploit.html)
+ [Reverse Regex](reverse-regex.html)
+ [Star \*](star.html)
+ [Wildcard](wildcard.html)
+ [Escape Character](escape-character.html)
+ [Perl Compatible Regular Expressions (PCRE)](pcre.html)
+ [Preg\_match](preg_match.html)
