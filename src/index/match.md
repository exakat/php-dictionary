# Match
The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html","name":"Match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``match`` expression is the remote cousin of the ``switch``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Match.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Match"}]}]}</script>
```php
<?php

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar'   => 'This food is a bar',
    'cake'  => 'This food is a cake',
    default => 'This is not food'
};

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.match.php)**
## See Also

+ [PHP Tricks: Multi-value match()](https://peakd.com/hive-168588/@crell/php-tricks-multi-value-match)

## Related

+ [Switch](switch.html)
+ [Default](default.html)
+ [If Then Else](if-then.html)
+ [UnhandledMatchError](unhandledmatcherror.html)
+ [Case](case.html)
+ [Comparison](comparison.html)
+ [Conditional Structures](conditional-structure.html)
+ [Control Flow](control-flow.html)
+ [Switch Fallthrough](fallthrough.html)
+ [Simple Switch](simple-switch.html)
+ [Strict Comparison](strict-comparison.html)
+ [Switch Case](switch-case.html)
+ [Switch Default](switch-default.html)
+ [Arm](arm.html)
+ [Control Structures](control-structure.html)
+ [Identical Operator](identical.html)
+ [Streamlining](streamlining.html)
