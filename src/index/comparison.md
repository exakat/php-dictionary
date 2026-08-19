# Comparison
Comparison operators check how two values relate to each other. They may be equal or different, and, depending on the type of compared data, they may be greater or lesser than the other one.

PHP comparisons exists with type-juggling, ``==``, ``<>``, ``<=>``, ``switch()`` and ``!=``, and with type checks, ``match()``, ``===`` and ``!==``. They are called loose comparison, as PHP applies some cast before executing the comparison. Inequalities only exist with type-juggling. 

On the other hand, PHP has strict comparisons, which include comparing the type before running any further checks. They are ``===`` and ``!==``. 

There are also functions dedicated to comparisons, with specific applications: ``strcmp()``, ``strcasecmp()``, ``strnatcasecmp()``, ``strcoll()``, ``similar_text()``, ``levensthein()``, ``bccomp()``, ``version_compare()``, ``hash_equals()``. 

Some of the functions include a loose or a strict version.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html","name":"Comparison","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Comparison operators check how two values relate to each other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Comparison.html"]}],"alternateName":["comparison-operator"],"keywords":["operator"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spaceship.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-hash.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/truthy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identity-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-arrow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/triple.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"},{"@type":"CreativeWork","name":"PHP Variable Comparison","url":"https:\/\/phpcheatsheets.com\/compare\/"},{"@type":"CreativeWork","name":"Difference between the (=), (==), and (===) operators in PHP","url":"https:\/\/www.educative.io\/answers\/difference-between-the-and-operators-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"comparison"}]}]}</script>
```php
<?php

    if ($a == $b) {
        print 'a and b are equal';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [PHP Variable Comparison](https://phpcheatsheets.com/compare/)
+ [Difference between the (=), (==), and (===) operators in PHP](https://www.educative.io/answers/difference-between-the-and-operators-in-php)

## Related

+ [Operators](operator.html)
+ [Type Juggling](type-juggling.html)
+ [Switch](switch.html)
+ [Match](match.html)
+ [Spaceship Operator](spaceship.html)
+ [Magic Hash](magic-hash.html)
+ [Truthy](truthy.html)
+ [Underscore](underscore.html)
+ [zero](zero.html)
+ [Identity Comparison](identity-comparison.html)
+ [Relaxed Comparison](relaxed-comparison.html)
+ [array\_keys()](array_keys.html)
+ [Double Arrow](double-arrow.html)
+ [Triple](triple.html)
