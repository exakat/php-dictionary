# For
``for()`` is a loop structure. It is configured with an initialization expression, an ending expression and an increment expression. 

The ``for()`` loop executes the init expression first, and only once. Then it executes the block, the increment and the ending. When the ending is false, it exits the loop.

The initialization, ending and increment expression may all host several instructions: they have to be separated by comma, rather than semi colons.

Part of the block execution may be skipped by using the ``continue`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/for.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/for.html","name":"For","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``for()`` is a loop structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/For.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"For"}]}]}</script>
```php
<?php

/*
for(initialization; ending; increment) {
    block
}
*/

for($i = 0; $i < 10; ++$i) {
    print "$i\n";
}

for($i = 0, $j = 0; $i < 10; ++$i, $j += 2) {
    print "$i $j\n";  // 1 2, 2 4, 3 6....
}

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.for.php)**
## See Also

+ [Stop using for loops and start showing intent](https://dev.to/rocksheep/stop-using-for-loops-and-start-showing-intent-3am0)
+ [PHP Loop: For, ForEach, While, Do While](https://www.guru99.com/php-loop.html)

## Related

+ [Continue](continue.html)
+ [foreach()](foreach.html)
+ [Loops](loop.html)
+ [While](while.html)
+ [Do While](do-while.html)
+ [Control Flow](control-flow.html)
+ [Blind Variable](blind-key.html)
+ [Control Structures](control-structure.html)
+ [Semicolon ;](semicolon.html)
