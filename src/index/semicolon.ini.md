# Semicolon ;
Semicolon ``;`` is used to mark the end of a statement. 

It is also used in the ``for()`` statement, to separate the initialization, the termination and the increment. When using several statement between those semicolons, they must be separated with a comma.

Semicolons may also be used instead of colons, in a case statement.

Semicolons may be omitted, before a closing PHP tag.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/semicolon.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/semicolon.ini.html","name":"Semicolon ;","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 06:12:06 +0000","dateModified":"Wed, 24 Jun 2026 06:12:06 +0000","description":"Semicolon ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Semicolon ;.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [Colon](colon.ini.html)
+ [Switch](switch.ini.html)
+ [For](for.ini.html)
+ [Statement](statement.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [CSV Injection](csv-injection.ini.html)
+ [SQL Injection](sql-injection.ini.html)
