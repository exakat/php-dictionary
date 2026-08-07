# Switch
The ``switch`` expression branches evaluation based on an equality check of a value. It also handles a ``default`` case, when none of the explicit cases match.

Each case is an expression, and shall be used that way. 

``switch`` use a relaxed comparison between the parameter value and the case values. This means that some type juggling happens, and some literals might behave as identical.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html","name":"Switch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``switch`` expression branches evaluation based on an equality check of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Switch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Switch"}]}]}</script>
```php
<?php

$b = 1;
switch ($i) {
    case 0:
        echo 'i equals 0';
        break;
    case 1:
        echo 'i equals 1';
        break;
    case $b + 1:
        echo 'i equals '.($b + 1);
        break;
    default:
        echo 'i is none of the expected values.';
}

switch (false) {
    case null:
        // false == null so this is the case
        echo 'This is null';
        break;
    case '':
        echo 'This is empty string';
        break;
    default:
        echo 'This is none of the expected values.';
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## See Also

+ [Compact switch alternative](https://tomlankhorst.nl/compact-switch-alternative-php/)
+ [PHP switch best practices](https://www.exakat.io/well-structured-switch-command-in-php/)

## Related

+ [Match](match.html)
+ [Default](default.html)
+ [Strict Comparison](strict-comparison.html)
+ [Simple Switch](simple-switch.html)
+ [If Then Else](if-then.html)
+ [Break](break.html)
+ [Case](case.html)
+ [Comparison](comparison.html)
+ [Conditional Structures](conditional-structure.html)
+ [Control Flow](control-flow.html)
+ [Relaxed Comparison](relaxed-comparison.html)
+ [Semicolon ;](semicolon.html)
+ [Switch Case](switch-case.html)
+ [Switch Default](switch-default.html)
+ [Feature Flag](feature-flag.html)
