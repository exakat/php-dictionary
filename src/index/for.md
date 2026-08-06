# For
``for()`` is a loop structure. It is configured with an initialization expression, an ending expression and an increment expression. 

The ``for()`` loop executes the init expression first, and only once. Then it executes the block, the increment and the ending. When the ending is false, it exits the loop.

The initialization, ending and increment expression may all host several instructions: they have to be separated by comma, rather than semi colons.

Part of the block execution may be skipped by using the ``continue`` keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/for.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/for.html","name":"For","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``for()`` is a loop structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/For.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Continue](continue.ini.html)
+ [foreach()](foreach.ini.html)
+ [Loops](loop.ini.html)
+ [While](while.ini.html)
+ [Do While](do-while.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Blind Variable](blind-key.ini.html)
+ [Control Structures](control-structure.ini.html)
+ [Semicolon ;](semicolon.ini.html)
