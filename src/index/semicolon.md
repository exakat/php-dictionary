# Semicolon ;
Semicolon ``;`` is used to mark the end of a statement. 

It is also used in the ``for()`` statement, to separate the initialization, the termination and the increment. When using several statement between those semicolons, they must be separated with a comma.

Semicolons may also be used instead of colons, in a case statement.

Semicolons may be omitted, before a closing PHP tag.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semicolon.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semicolon.html","name":"Semicolon ;","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Semicolon ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/semicolon.html"]}],"alternateName":[";"],"keywords":["syntax","token","character","punctuation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/for.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/statement.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sql-injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Semicolon#Computing"},{"@type":"CreativeWork","name":"PHP: Instruction separation - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.basic-syntax.instruction-separation.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"semicolon"}]}]}</script>
```php
<?php

    $a = 1; $b = 2;
    
    // multi-statement usage in for()
    for($i = 0, $j = 0; $i < 10; ++$i, ++$j) {
        print "$i $j\n";
    }
    
    switch($a) {
        case 1;
            $a = 2;
            break;
            
        default; 
            $a = 1;
    }
    
    // semi colon may be omitted before the closing tag.
    $c = 1

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Semicolon#Computing)**
## See Also

+ [PHP: Instruction separation - Manual](https://www.php.net/manual/en/language.basic-syntax.instruction-separation.php)

## Related

+ [Colon](colon.html)
+ [Switch](switch.html)
+ [For](for.html)
+ [Statement](statement.html)
+ [Control Flow](control-flow.html)
+ [CSV Injection](csv-injection.html)
+ [SQL Injection](sql-injection.html)
