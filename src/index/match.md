# Match
The ``match`` expression is the remote cousin of the ``switch``. It takes a value, branch among a list of cases, or fallback to a default one, and returns a unique value. 

``match`` use a strict comparison for the comparison. ``match`` raise an error if no case match, unless the ``default`` case is provided. 

``match`` is an expression, to be used in an assignment, while ``switch`` is a command, and must be used alone.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/match.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/match.html","name":"Match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``match`` expression is the remote cousin of the ``switch``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Match.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Switch](switch.ini.html)
+ [Default](default.ini.html)
+ [If Then Else](if-then.ini.html)
+ [UnhandledMatchError](unhandledmatcherror.ini.html)
+ [Case](case.ini.html)
+ [Comparison](comparison.ini.html)
+ [Conditional Structures](conditional-structure.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Switch Fallthrough](fallthrough.ini.html)
+ [Simple Switch](simple-switch.ini.html)
+ [Strict Comparison](strict-comparison.ini.html)
+ [Switch Case](switch-case.ini.html)
+ [Switch Default](switch-default.ini.html)
+ [Arm](arm.ini.html)
+ [Control Structures](control-structure.ini.html)
+ [Identical Operator](identical.ini.html)
+ [Streamlining](streamlining.ini.html)
