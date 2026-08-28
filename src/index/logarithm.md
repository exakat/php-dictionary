# Logarithm
The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``. There are two logarithm functions: the natural logarithm, where ``log(M_E) == 1``, and the base-10 logarithm, where ``log(10) == 1``.

PHP also offers ``log1p($x) == log(1 + $x)``. This function exists because ``log($x)`` is very close to 0 when ``$x`` is close to 1. To avoid rounding errors, ``log1p()`` is dedicated to this calculations and immediately yields the decimal part of the logarithm.

The opposite function of the logarithm is exponential, ``exp()``, and the ``**`` operator. 

A logarithm is not the same as an algorithm, or a log file.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logarithm.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logarithm.html","name":"Logarithm","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:40:34 +0000","dateModified":"Mon, 24 Aug 2026 07:40:34 +0000","description":"The logarithm is a family of mathematical functions, where log($a * $b) == log($a) + log($b)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logarithm.html"]}],"alternateName":["log10","log1p"],"keywords":["math"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/algorithm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exponential.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/power.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/log-file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/e.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/log.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Logarithm"},{"@type":"CreativeWork","name":"PHP Math Functions: A Comprehensive Guide with Examples","url":"https:\/\/codingeasypeasy.com\/blog\/php-math-functions-a-comprehensive-guide-with-examples\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"logarithm"}]}]}</script>
```php
<?php

    echo log(M_E);
    print PHP_EOL;  // 1
    
    echo log(1); 
    print PHP_EOL;  // 0
    
    echo log(1.001); 
    print PHP_EOL;  // 0.00099950033308342
    
    echo log1p(0.001); //0.00099950033308353
    print PHP_EOL;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Logarithm)**
## See Also

+ [PHP Math Functions: A Comprehensive Guide with Examples](https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/)

## Related

+ [Algorithm](algorithm.html)
+ [Exponential](exponential.html)
+ [Exponent](power.html)
+ [Floating Point Numbers](float.html)
+ [zero](zero.html)
+ [one](one.html)
+ [Log File](log-file.html)
+ [E](e.html)
+ [Log](log.html)
