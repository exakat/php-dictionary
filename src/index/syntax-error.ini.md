# Syntax Error
A syntax error happens when the text could not be parsed into tokens by PHP. PHP would use the tokens to interpret the code, but here, the tokens are not recognizable. 

Syntax error happen for a variety of reasons, which may compound one with the other: 

+ Unbalanced opening/closing tokens, such as parenthesis ``()``, brackets ``[]``, curly brackets ``{}``
+ Unfinished command: the final semi colon ``;`` was forgotten
+ Forgotten ``)``, in particular when there need to be more than 2, sometimes even 1.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/syntax-error.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/syntax-error.ini.html","name":"Syntax Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:18 +0000","dateModified":"Fri, 19 Jun 2026 21:24:18 +0000","description":"A syntax error happens when the text could not be parsed into tokens by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Syntax Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a[1  = 3;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Syntax_error)**
## See Also

+ [Types of Errors in PHP](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)

## Related

+ [Syntax](syntax.ini.html)
+ [Lint, Won't Execute](lint-wont-execute.ini.html)
