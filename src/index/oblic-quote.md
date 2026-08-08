# Oblic Quotes
Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system. They are deprecated since version 8.5, and they have no more specific usage.

`` \` `` is a character, that needs to be balanced, when used in code syntax.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oblic-quote.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oblic-quote.html","name":"Oblic Quotes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Oblic quotes, also called backticks, `` \\` `` were used to make a shell call to the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Oblic Quotes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Oblic Quotes"}]}]}</script>
```php
<?php

    echo `ls -hla`;
    
    // moder alternative
    echo shell_exec('ls -hla');

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.execution.php)**
## See Also

+ [PHP RFC: Deprecate backtick operator](https://wiki.php.net/rfc/deprecate-backtick-operator-v2)
+ [Backtick Operator to Run Shell Command is Deprecated in PHP 8.5](https://lindevs.com/backtick-operator-to-run-shell-command-is-deprecated-in-php-8-5)

## Related

+ [Balanced](balanced.html)
+ [Double Quotes Strings](double-quote.html)
+ [Single Quotes Strings](single-quote.html)
