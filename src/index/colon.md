# Colon
Colons are used in a variety of situations: 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark
+ In ``include_path`` and ``open_basedir``, double-colon is used as a separator

The double colon is a distinct operator.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html","name":"Colon","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:16:42 +0000","dateModified":"Fri, 28 Aug 2026 10:16:42 +0000","description":"Colons are used in a variety of situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"]}],"keywords":["syntax","token","punctuation","character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/goto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/label.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ternary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null-ternary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coalesce.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/named-parameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/double-colon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semicolon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Colon_(punctuation)"},{"@type":"CreativeWork","name":"goto","url":"https:\/\/www.php.net\/manual\/en\/control-structures.goto.php"},{"@type":"CreativeWork","name":"Comparison operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.comparison.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"colon"}]}]}</script>
```php
<?php

    goto there;
    there:

    foo(a: 3); // 

    $b = $a ? 'a' : 'b';
    $c = $c ?: 'a';

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Colon_(punctuation))**
## See Also

+ [goto](https://www.php.net/manual/en/control-structures.goto.php)
+ [Comparison operators](https://www.php.net/manual/en/language.operators.comparison.php)

## Related

+ [Goto](goto.html)
+ [Goto Labels](label.html)
+ [Ternary Operator](ternary.html)
+ [Coalesce Operator](null-ternary.html)
+ [Coalesce Operator](coalesce.html)
+ [Named Parameters](named-parameter.html)
+ [Scope Resolution Operator ::](double-colon.html)
+ [Separator](separator.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Semicolon ;](semicolon.html)
+ [Static Class](static-class.html)
