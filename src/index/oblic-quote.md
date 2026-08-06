# Oblic Quotes
Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system. They are deprecated since version 8.5, and they have no more specific usage.

`` \` `` is a character, that needs to be balanced, when used in code syntax.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/oblic-quote.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/oblic-quote.html","name":"Oblic Quotes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:25:31 +0000","dateModified":"Fri, 24 Jul 2026 15:25:31 +0000","description":"Oblic quotes, also called backticks, `` \\` `` were used to make a shell call to the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Oblic Quotes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo `ls -hla`;
    
    // moder alternative
    echo shell_exec('ls -hla');

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.execution.php)**
## Related

+ [Balanced](balanced.ini.html)
+ [Double Quotes Strings](double-quote.ini.html)
+ [Single Quotes Strings](single-quote.ini.html)
