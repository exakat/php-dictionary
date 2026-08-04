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

Related : [Block](Block), [Alternative Syntax](Alternative Syntax), [Curly Brackets](Curly Brackets), [Bracket](Bracket), [Parenthesis](Parenthesis), [Square Brackets](Square Brackets)
