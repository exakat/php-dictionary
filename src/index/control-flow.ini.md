# Control Flow
Control flow structures direct the way PHP executes the statements. For example, a loop repeats the same statements several times; a goto instruction jumps to another part of the code; a if-then statement applies a block of code or another, depending on a condition.

+ if
+ else
+ elseif/else if
+ Alternative syntax for control structures
+ while
+ do...while
+ for
+ foreach
+ break
+ continue
+ switch
+ match
+ declare
+ return
+ ``require()``
+ ``include()``
+ ``require_once()``
+ ``include_once()``
+ goto

Control flow structures can't be called dynamically: they have to be hardcoded, or nested in a closure or other function.

Each of these constructs answers a different question about the order of execution: conditionals, ``if``, ``elseif``, ``match``, choose between branches; loops, ``while``, ``do...while``, ``for``, ``foreach``, repeat a block until a condition changes; jump statements, ``break``, ``continue``, ``return``, ``goto``, leave the current structure early or transfer control elsewhere; and the file-inclusion constructs, ``require``, ``include``, and their ``_once`` variants, bring another script's control flow into the current one.

Understanding control flow is central to reading any PHP program, since it determines which statements actually run for a given input, in what order, and how many times. Poorly structured control flow, such as deeply nested conditionals or unbounded loops, is a common source of bugs and a frequent target of static analysis and refactoring.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/control-flow.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/control-flow.ini.html","name":"Control Flow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:14:57 +0000","dateModified":"Tue, 04 Aug 2026 11:14:57 +0000","description":"Control flow structures direct the way PHP executes the statements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Control Flow.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    if ($a === 1) { 
        $b = 2;
    } else {
        $b = 3;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.control-structures.php)**
## See Also

+ [PHP flow control](https://zetcode.com/php/flowcontrol/)
+ [PHP Control Flow](https://www.codeguage.com/v1/courses/php/control-flow)

## Related

+ [Statement](statement.ini.html)
+ [Loops](loop.ini.html)
+ [Semicolon ;](semicolon.ini.html)
+ [If Then Else](if-then.ini.html)
+ [While](while.ini.html)
+ [Do While](do-while.ini.html)
+ [For](for.ini.html)
+ [foreach()](foreach.ini.html)
+ [Break](break.ini.html)
+ [Continue](continue.ini.html)
+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [declare()](declare.ini.html)
+ [Return](return.ini.html)
+ [Inclusions](inclusion.ini.html)
+ [Goto](goto.ini.html)
+ [Jump](jump.ini.html)
