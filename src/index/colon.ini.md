# Colon
Colons are used in a variety of situations: 

+ With named parameters, to separate the name from the value
+ With labels, for goto
+ With ternary operator, separated or not from the question mark
+ In ``include_path`` and ``open_basedir``, double-colon is used as a separator

The double colon is a distinct operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/colon.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/colon.ini.html","name":"Colon","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:12 +0000","dateModified":"Fri, 19 Jun 2026 21:26:12 +0000","description":"Colons are used in a variety of situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Colon.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Goto](goto.ini.html)
+ [Goto Labels](label.ini.html)
+ [Ternary Operator](ternary.ini.html)
+ [Coalesce Operator](null-ternary.ini.html)
+ [Coalesce Operator](coalesce.ini.html)
+ [Named Parameters](named-parameter.ini.html)
+ [Scope Resolution Operator ::](double-colon.ini.html)
+ [Separator](separator.ini.html)
+ [Scope Resolution Operator ::](scope-resolution-operator.ini.html)
+ [Semicolon ;](semicolon.ini.html)
+ [Static Class](static-class.ini.html)
