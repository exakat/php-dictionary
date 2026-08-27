# Exponential
The exponential is a mathematical function. It satisfies the expressions: ``exp($a + $b) = exp($a) * exp($b)``, and ``exp(0) === 1``.

There is a special ``expm1()`` function, which calculates the exponential value of ``$x - 1``. When ``$x`` is close to 0, this function provides more significant digits than using the expression ``exp($x) - 1``.

Exponential calculations may also be led with the constant ``M_E`` and the operator ``**`` or the function ``pow()``, although there is a slight difference.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponential.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponential.html","name":"Exponential","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:53:08 +0000","dateModified":"Tue, 11 Aug 2026 20:53:08 +0000","description":"The exponential is a mathematical function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponential.html"]}],"alternateName":["exp"],"keywords":["math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%2A%2A.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/e.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logarithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sqrt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/star.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Exponential_function"},{"@type":"CreativeWork","name":"PHP Math Functions: A Comprehensive Guide with Examples","url":"https:\/\/codingeasypeasy.com\/blog\/php-math-functions-a-comprehensive-guide-with-examples\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"exponential"}]}]}</script>
```php
<?php

    $e = exp(1); // also known as the contant M_E
    
    var_dump(exp(2) === M_E ** 2); // false
    var_dump(exp(2) - M_E ** 2);   // float(8.881784197001252E-16)

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Exponential_function)**
## See Also

+ [PHP Math Functions: A Comprehensive Guide with Examples](https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/)

## Related

+ [Exponent](**.html)
+ [Exponent](pow.html)
+ [E](e.html)
+ [Logarithm](logarithm.html)
+ [sqrt()](sqrt.html)
+ [Star \*](star.html)
