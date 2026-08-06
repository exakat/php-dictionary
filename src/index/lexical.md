# Lexical Variable
A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lexical.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/lexical.html","name":"Lexical Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:47 +0000","dateModified":"Fri, 19 Jun 2026 21:24:47 +0000","description":"A lexical variable is the type of variable that appears in the ``use`` part of a closure definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Lexical Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$c = 1;

function ($a, $b) use ($c) {
    // doSomething();
}

?>
```

**[Documentation](https://www.php.net/manual/en/functions.anonymous.php)**
## Related

+ [Closure](closure.ini.html)
+ [Variables](variable.ini.html)
+ [Closure Binding](closure-binding.ini.html)
+ [Anonymous Function](anonymous-function.ini.html)
