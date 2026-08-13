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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html","name":"Control Flow","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Control flow structures direct the way PHP executes the statements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Control Flow.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"control-flow"}]}]}</script>
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

+ [Statement](statement.html)
+ [Loops](loop.html)
+ [Semicolon ;](semicolon.html)
+ [If Then Else](if-then.html)
+ [While](while.html)
+ [Do While](do-while.html)
+ [For](for.html)
+ [foreach()](foreach.html)
+ [Break](break.html)
+ [Continue](continue.html)
+ [Switch](switch.html)
+ [Match](match.html)
+ [declare()](declare.html)
+ [Return](return.html)
+ [Inclusions](inclusion.html)
+ [Goto](goto.html)
+ [Jump](jump.html)
