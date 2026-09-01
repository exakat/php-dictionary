# Strict Comparison
Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value. In other words, it does not apply any type-juggling to the values before processing. 

Here are the strict operators: ``==`` may be replaced with ``===``,  ``!=`` may be replaced with ``!==``, ``switch`` may be replaced with ``match``, ``in_array()`` with the third parameter ``strict`` set to true.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html","name":"Strict Comparison","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html"]}],"keywords":["comparison"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hash-comparison.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"},{"@type":"CreativeWork","name":"Strict vs. Loose Comparisons in PHP","url":"https:\/\/www.copterlabs.com\/strict-vs-loose-comparisons-in-php\/"},{"@type":"CreativeWork","name":"Strict Comparison in PHP Explained at the Zend Engine Level","url":"https:\/\/coderlegion.com\/9440\/strict-comparison-in-php-explained-at-the-zend-engine-level"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"strict-comparison"}]}]}</script>
```php
<?php

    //true
    var_dump(1 == "1");
    //false
    var_dump(1 === "1");
    
    //true
    var_dump(null == 0);
    //false
    var_dump(null === 0);

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Strict vs. Loose Comparisons in PHP](https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/)
+ [Strict Comparison in PHP Explained at the Zend Engine Level](https://coderlegion.com/9440/strict-comparison-in-php-explained-at-the-zend-engine-level)

## Related

+ [Switch](switch.html)
+ [Match](match.html)
+ [Relaxed Comparison](relaxed-comparison.html)
+ [Hash Comparisons](hash-comparison.html)
