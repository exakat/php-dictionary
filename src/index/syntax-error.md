# Syntax Error
A syntax error happens when the text could not be parsed into tokens by PHP. PHP would use the tokens to interpret the code, but here, the tokens are not recognizable. 

Syntax error happen for a variety of reasons, which may compound one with the other: 

+ Unbalanced opening/closing tokens, such as parenthesis ``()``, brackets ``[]``, curly brackets ``{}``
+ Unfinished command: the final semi colon ``;`` was forgotten
+ Forgotten ``)``, in particular when there need to be more than 2, sometimes even 1.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html","name":"Syntax Error","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:18 +0000","dateModified":"Fri, 19 Jun 2026 21:24:18 +0000","description":"A syntax error happens when the text could not be parsed into tokens by PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax-error.html"]}],"keywords":["error","syntax","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint-wont-execute.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Syntax_error"},{"@type":"CreativeWork","name":"Types of Errors in PHP","url":"https:\/\/www.scaler.com\/topics\/php-tutorial\/types-of-errors-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"syntax-error"}]}]}</script>
```php
<?php

$a[1  = 3;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Syntax_error)**
## See Also

+ [Types of Errors in PHP](https://www.scaler.com/topics/php-tutorial/types-of-errors-in-php/)

## Related

+ [Syntax](syntax.html)
+ [Lint, Won't Execute](lint-wont-execute.html)
