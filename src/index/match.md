# Match
The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html","name":"Match","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 06:37:01 +0000","dateModified":"Thu, 13 Aug 2026 06:37:01 +0000","description":"The match expression is the remote cousin of the switch","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"]}],"keywords":["keyword","expression","control flow"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unhandledmatcherror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/conditional-structure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fallthrough.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/simple-switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict-comparison.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-default.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-structure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/identical.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streamlining.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exhaustiveness.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idiomatic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sum-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.match.php"},{"@type":"CreativeWork","name":"PHP Tricks: Multi-value match()","url":"https:\/\/peakd.com\/hive-168588\/@crell\/php-tricks-multi-value-match"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"match"}]}]}</script>
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
+ [Exhaustiveness](exhaustiveness.html)
+ [Idiomatic](idiomatic.html)
+ [Strict](strict.html)
+ [Sum Type](sum-type.html)
