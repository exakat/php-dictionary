# Dynamic Expression
A dynamic expression is an expression that is only wholly defined at execution time. It needs to collect pieces of information before processing. This applies to elements that are usually static, such as class, function, method, constants, not to parameters which are expected to be variable.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-expression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-expression.html","name":"Dynamic Expression","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:08:47 +0000","dateModified":"Tue, 25 Aug 2026 19:08:47 +0000","description":"A dynamic expression is an expression that is only wholly defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-expression.html"]}],"keywords":["pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-expression.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.expressions.php"},{"@type":"CreativeWork","name":"Variable variables","url":"https:\/\/www.php.net\/manual\/en\/language.variables.variable.php"},{"@type":"CreativeWork","name":"Variable Functions","url":"https:\/\/www.php.net\/manual\/en\/functions.variable-functions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-expression"}]}]}</script>
```php
<?php

    $config = new ConfigFile();

    $function = $config->sortingMethod; // sort, or rsort
    $function($array);

?>
```

**[Documentation](https://www.php.net/manual/en/language.expressions.php)**
## See Also

+ [Variable variables](https://www.php.net/manual/en/language.variables.variable.php)
+ [Variable Functions](https://www.php.net/manual/en/functions.variable-functions.php)

## Related

+ [Static Expression](static-expression.html)
