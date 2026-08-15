# Control Structures
Control structures are PHP statements that control the flow of execution. 

+ if / elseif / else if
+ while
+ do-while
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

Usually, instructions and commands are executed one after each other. With control structures, this flow is changed and the execution will go to another part of the code for its next step. For example, inside a loop, when PHP encounters a break command, it will then execute the next command after the loop, instead of the next command sequentially.

PHP offers each control structure in a curly-brace form and, for use inside templates mixed with HTML, an alternative syntax that replaces braces with a colon and a matching ``end...;`` keyword ``endif``, ``endwhile``, ``endfor``, ``endforeach``, ``endswitch``. Both forms are functionally equivalent; the alternative syntax is mostly a readability choice when PHP blocks are interleaved with markup.

Control structures cannot be assigned to variables, passed as callbacks, or invoked dynamically the way functions can: their names are reserved keywords parsed directly by the engine, which is what allows them to alter the normal top-to-bottom execution order in the first place.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-structure.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-structure.html","name":"Control Structures","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Control structures are PHP statements that control the flow of execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Control Structures.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"control-structure"}]}]}</script>
```php
<?php

    if (rand(0, 1) > 0) {
        print 'Hello, world.';
    } else {
        print 'World : hello!';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.control-structures.php)**
## See Also

+ [PHP. Control Structures](https://alishoff.com/blog/500)

## Related

+ [foreach()](foreach.html)
+ [For](for.html)
+ [declare()](declare.html)
+ [Match](match.html)
+ [Alternative Syntax](alternative-syntax.html)
+ [Coding Conventions](coding-convention.html)
