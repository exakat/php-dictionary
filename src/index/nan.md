# Not A Number (NAN)
Not A Number is a PHP constant, also called ``NAN``. It represents the result of a math function, when the provided arguments are out of the application domain of that function. For example, ``acos()`` only works with values between -1 and 1, so processing ``acos(10)`` returns a ``NAN``. 

This is slightly different from ``tan($x)``, with ``$x = M_PI;``. In this case, the returned value is ``INF``. 

While a Not A Number value is a float, it is possible to test a number with ``is_nan()``. It is not possible to compare ``NAN`` together.

``NAN`` is displayed as ``NAN``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nan.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nan.html","name":"Not A Number (NAN)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Not A Number is a PHP constant, also called NAN","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nan.html"]}],"keywords":["number","acronym","float"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/float.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/e.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/math.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/math.constants.php"},{"@type":"CreativeWork","name":"is_nan()","url":"https:\/\/www.php.net\/manual\/en\/function.is-nan.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nan"}]}]}</script>
```php
<?php

$nan = NAN;

var_dump(is_nan($nan)); // true 

var_dump(acos(3) === NAN);  // false 

var_dump(acos(3));  // float(NAN)

?>
```

**[Documentation](https://www.php.net/manual/en/math.constants.php)**
## See Also

+ [is_nan()](https://www.php.net/manual/en/function.is-nan.php)

## Related

+ [Floating Point Numbers](float.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [E](e.html)
+ [Math](math.html)
