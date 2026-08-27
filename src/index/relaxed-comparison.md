# Relaxed Comparison
Relaxed comparison, also known as loose comparison, is a comparison style that allows for non-strict equality checks between values. Relaxed comparison is performed using the double equals operator ``==``.

When using relaxed comparison ``==``, PHP will attempt to convert the operands to compatible types before comparing them. If the operands are of different types, PHP will perform type coercion to make them comparable.

Relaxed comparison is associated with ``==``, ``!=`` and ``<>``. It also applies to ``switch()``, the spaceship operator ``<=>``, and the inequalities ``>``, ``<``, ``>=``, ``<=``. 

The contrary to relaxed comparison is the strict comparison, which includes type. 

Loose comparison is known to have changed significantly in version 8.0: in particular, for special values like 0, empty string '', null and false.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-comparison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-comparison.html","name":"Relaxed Comparison","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:40:39 +0000","dateModified":"Mon, 24 Aug 2026 07:40:39 +0000","description":"Relaxed comparison, also known as loose comparison, is a comparison style that allows for non-strict equality checks between values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-comparison.html"]}],"alternateName":["loose-comparison"],"keywords":["feature","syntax","name","micro-optimisation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identical.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"},{"@type":"CreativeWork","name":"Strict vs. Loose Comparisons in PHP","url":"https:\/\/www.copterlabs.com\/strict-vs-loose-comparisons-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relaxed-comparison"}]}]}</script>
```php
<?php

    //true
    var_dump(1 == "1");
    //false
    var_dump(1 === "1");
    
    //false
    var_dump(1 > 'a');
    //true
    var_dump(1 < 'a');

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Strict vs. Loose Comparisons in PHP](https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/)

## Related

+ [Switch](switch.html)
+ [Strict Comparison](strict-comparison.html)
+ [Comparison](comparison.html)
+ [Identical Operator](identical.html)
