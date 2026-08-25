# Post-increment
Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable. This means that the increment happens after the variable is read: in this case, the first echo displays 1, as the increment happens after the echo call. 

There is also a post-decrement, which uses the operator ``--``, and reduces the variable by 1.

Post-increment and post-decrement have a corresponding pre-increment and pre-decrement.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html","name":"Post-increment","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 07:53:16 +0000","dateModified":"Wed, 19 Aug 2026 07:53:16 +0000","description":"Post-increment is the ++ operator, used on a variable, when it is placed after the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/post-increment.html"]}],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pre-increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/increment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/minus.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.increment.php"},{"@type":"CreativeWork","name":"Pre-increment and post-increment aren't the same","url":"http:\/\/www.hackingwithphp.com\/18\/1\/8\/pre-increment-and-post-increment-arent-the-same"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"post-increment"}]}]}</script>
```php
<?php

    $a = 1;
    echo $a++; // displays 2
    echo $a;   // displays 2

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.increment.php)**
## See Also

+ [Pre-increment and post-increment aren't the same](http://www.hackingwithphp.com/18/1/8/pre-increment-and-post-increment-arent-the-same)

## Related

+ [Pre-increment](pre-increment.html)
+ [Variables](variable.html)
+ [Increment](increment.html)
+ [one](one.html)
+ [Double](double.html)
+ [Minus -](minus.html)
