# @, No Scream Operator
The ``@`` operator prevent error reports in specific expressions. 

The operator must be added before the expression it protect. The execution proceeds and no warning is emitted, if ever one is encountered. Fatal errors, on the other hand, are still displayed as necessary. For example, a call to a non-existing function is still reported, even with the operator set in place.

The operator ``@`` set the context at the expression level: any error happening during the processing of the expression is suppressed. This applies to all expressions inside a method, or even all the code inside an include.

The operator is called the ``no scream`` operator.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/noscream.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/noscream.html","name":"@, No Scream Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The @ operator prevent error reports in specific expressions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/@, No Scream Operator.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"noscream"}]}]}</script>
```php
<?php

echo @$a; // no error

$all = [];
foreach(someArray() as $value) {
    @$all[$value]++;  // slow initialisation and incrementation 
}

// Fatal error, in any case
@foo(); 

@bar();
function bar() {
    // This error won't show up
    trigger_error('a', E_USER_WARNING);
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.errorcontrol.php)**
## See Also

+ [I scream, you scream, we all scream for @ no scream operator](https://www.exakat.io/i-scream-you-scream-we-all-scream-for/)

## Related

+ [trigger\_error()](trigger_error.html)
+ [Error Reporting](error-reporting.html)
+ [Error Suppression](error-suppression.html)
+ [Habit](habit.html)
+ [Non-numeric](non-numeric.html)
