---
type: "token"
title: "Semicolon ;"
description: "Semicolon ``;`` is used to mark the end of a statement."
resource: "https://en.wikipedia.org/wiki/Semicolon#Computing"
tags: ["syntax", "token", "character", "punctuation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Semicolon ;

Semicolon ``;`` is used to mark the end of a statement. 

It is also used in the ``for()`` statement, to separate the initialization, the termination and the increment. When using several statement between those semicolons, they must be separated with a comma.

Semicolons may also be used instead of colons, in a case statement.

Semicolons may be omitted, before a closing PHP tag.

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

## Documentation
- [https://en.wikipedia.org/wiki/Semicolon#Computing](https://en.wikipedia.org/wiki/Semicolon#Computing)

## See Also
- [PHP: Instruction separation - Manual](https://www.php.net/manual/en/language.basic-syntax.instruction-separation.php)

## Related
- [Colon](/features/colon.md)
- [Switch](/features/switch.md)
- [For](/features/for.md)
- [Statement](/features/statement.md)
- [Control Flow](/features/control-flow.md)
- [CSV Injection](/features/csv-injection.md)
- [SQL Injection](/features/sql-injection.md)

