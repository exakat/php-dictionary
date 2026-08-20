# Question Mark ?
``?`` is a character, used in various situations: 

+ Ternary operator: ``$a ? $b : $c``
+ Short ternary operator: ``$a ?: $c``
+ Coalesce operator: ``$a ??``
+ Null type, ``function foo(?int $int) {}``
+ As a quantifier in regex, 0 or 1
+ As a quantifier with ``fnmatch()``, 0 or 1.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/question-mark.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/question-mark.html","name":"Question Mark ?","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:14 +0000","dateModified":"Fri, 19 Jun 2026 21:29:14 +0000","description":"","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Question Mark ?.html"]}],"alternateName":["?"],"keywords":["character","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/regex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fnmatch.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"question-mark"}]}]}</script>
```php
<?php

    $a = 1;
    echo a ? 'b' : 'c'; // c

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## Related

+ [Ternary Operator](ternary-operator.html)
+ [Coalesce Operator](coalesce.html)
+ [Type System](type.html)
+ [Regular Expression](regex.html)
+ [fnmatch()](fnmatch.html)
