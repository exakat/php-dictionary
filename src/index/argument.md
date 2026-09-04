# Argument
Arguments are values passed to a function or method, at execution time. The argument is the execution time value, and the recipient of that value is the parameter, which is located in the signature of the method. They may be a variable or an expression.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argument.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argument.html","name":"Argument","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Arguments are values passed to a function or method, at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/argument.html"]}],"keywords":["execution"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comma.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parenthesis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php"},{"@type":"CreativeWork","name":"What's the difference between an argument and a parameter?","url":"https:\/\/stackoverflow.com\/questions\/156767\/whats-the-difference-between-an-argument-and-a-parameter"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"argument"}]}]}</script>
```php
<?php

    function foo($parameter) {}

    $argument = 1;
    foo($argument + 2);

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## See Also

+ [What's the difference between an argument and a parameter?](https://stackoverflow.com/questions/156767/whats-the-difference-between-an-argument-and-a-parameter)

## Related

+ [Parameter](parameter.html)
+ [Comma](comma.html)
+ [Parenthesis](parenthesis.html)
