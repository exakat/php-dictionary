# Balanced
A pair of tokens is balanced when the opening token has a corresponding and unique closing token. 

Tokens that needs balancing: 

+ Parenthesis, with ``(`` and ``)``
+ Curly bracket, with ``{`` and ``}``
+ Variable delimiters with curly bracket, with ``${`` and ``}``
+ Square bracket, with ``[`` and ``]``
+ Single quotes, with ``'``
+ Double quotes, with ``"``
+ Oblic quotes, with `` \` ``

Quotes are the same for opening and closing tokens. 

The listed tokens must be nested: after an opening token, any new opening token must be closed before the first one can be closed.

Inside quotes, the brackets and parenthesis may be unbalanced, as the accountability is turned off. This is not the case for curly brackets, 

Closing tokens are assigned to the last opening token: in case of mismatch, it produces a syntax error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/balanced.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/balanced.html","name":"Balanced","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:38:35 +0000","dateModified":"Fri, 24 Jul 2026 15:38:35 +0000","description":"A pair of tokens is balanced when the opening token has a corresponding and unique closing token","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Balanced.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"balanced"}]}]}</script>
```php
<?php

    // This is a syntax error.
    // $x = ([; 
    
    $y = '])(['; // this is OK inside quotes
    // the curly brackets must be balanced when they enclose a variable or valid PHP expression.
    // $y = "{$x"; 

?>
```

## Related

+ [Parenthesis](parenthesis.html)
+ [Bracket](bracket.html)
+ [Curly Brackets](curly-bracket.html)
+ [Single Quotes Strings](single-quote.html)
+ [Double Quotes Strings](double-quote.html)
+ [Oblic Quotes](oblic-quote.html)
