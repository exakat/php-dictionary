# Propagation
Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency. 

In the example code, ``foo()`` and ``goo()`` are not typed, with arguments nor with return. Yet, the final call to ``strlen()`` means that both parameters must be ``string`` and both their return type will be ``int``. The types propagated from ``strlen()`` to the other functions.

Propagation is visible with types, as illustrated; it also applies to functions that die or use the ``never`` return type; and to unused piece of code, where not using a piece of code renders any called code unused, and, also useless.

Propagation is often silent, and does not yield error. Yet, it implies structure in the code, that makes it difficult to update.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/propagation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/propagation.html","name":"Propagation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:12:15 +0000","dateModified":"Tue, 04 Aug 2026 06:12:15 +0000","description":"Propagation is the consequence of one piece of code, that applies to another part of the code, via a dependency","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Propagation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// type propagation via calls
function foo($x) {
    goo($x);
}

function goo($x) {
    hoo($x);
}

function hoo($x) {
    strlen($x);
}

// useless function, via lack of usage
function boo($x) {
    // doSomething
}

// $result is not used, 
// so boo() is not used
$result = boo(1);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Type_inference)**
## Related

+ [Useless](useless.ini.html)
+ [Type System](type.ini.html)
+ [Exit](exit.ini.html)
+ [Cascading](cascading.ini.html)
