---
type: "PHP Feature"
title: "Bracketless"
description: "Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``."
resource: "https://en.wikipedia.org/wiki/Indent_style"
tags: ["convention", "syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Bracketless

Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``. 

Bracketless blocks lead to only one expression as a block, which is error prone. Most of the time, the brackets are always required by convention, unless the block is explicitly delimited, as in a ``do-while()``.

This is the case with single expressions ``for()``, ``foreach()``, ``while()``. It is the case with ``do-while`` and with ``cases``, in ``switch()``.

It is also the default usage with the alternative syntax, which does not use brackets for block enclosing.

``switch()`` and ``match()`` must have parenthesis around the block of cases: these can't be bracketless.

Bracketless only applies to curly brackets ``{}``. Parenthesis are mostly used for operator precedence, and, when not, are actually useless. Square brackets are never optional.

```php
<?php

    // bracketless foreach()
    foreach([1,2,3] as $number) 
        print $number . PHP_EOL;
        $a = 1; // This is not part of the loop, even if it looks like so
    
    // bracketless do-while()
    $number = 1;
    do 
        print $number . PHP_EOL;
        ++$number;
    while ($number < 4);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Indent_style](https://en.wikipedia.org/wiki/Indent_style)

## See Also
- [Alternative syntax for control structures](https://www.php.net/manual/en/control-structures.alternative-syntax.php)
- [PHP's Alternate Control Structure Syntax](https://davidwalsh.name/php-alternate-syntax)

## Related
- [Block](/features/block.md)
- [Alternative Syntax](/features/alternative-syntax.md)
- [Curly Brackets](/features/curly-bracket.md)
- [Bracket](/features/bracket.md)
- [Parenthesis](/features/parenthesis.md)
- [Square Brackets](/features/square-bracket.md)

## Details
- Extension: ext-Structures/Bracketless

