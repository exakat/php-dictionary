# Lexical Variable
A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lexical.html","name":"Lexical Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 09:04:17 +0000","dateModified":"Tue, 11 Aug 2026 09:04:17 +0000","description":"A lexical variable is the type of variable that appears in the ``use`` part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Lexical Variable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lexical"}]}]}</script>
```php
<?php

$c = 1;

function ($a, $b) use ($c) {
    // doSomething();
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.anonymous.php)**
## See Also

+ [PHP Anonymous Functions](https://www.phptutorial.net/php-tutorial/php-anonymous-functions/)

## Related

+ [Closure](closure.html)
+ [Variables](variable.html)
+ [Closure Binding](closure-binding.html)
+ [Anonymous Function](anonymous-function.html)
