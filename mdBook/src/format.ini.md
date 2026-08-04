# Format
Format is a set of rules to structure a piece of text, and make it parsable by a specific engine. A piece of text may be in the format: then, it is usable as a command for another technology. 

Formats have various shapes. Here are some examples of formats: 

+ ``SQL`` Structure Query Language: ``SELECT column FROM table`` 
+ Date and time: ``2020-01-01`` 
+ ``sprintf()``, with ``%d 9`` 
+ Regular expressions
+ ``YAML``
+ ``INI``
+ ``CSV``
+ ``JSON``

It is possible to define one's custom format. Common formats have a comprehensive specifications, such as how to build them, and assorted tools, to encode, decode, use, combine, etc. 
```php
<?php

    // displays 123 with 9 characters, and fills with dots any empty characters
    // ......123
    echo sprintf("%'.9d\n", 123);

?>
```

Related : [String](String), [Comma Secparated Values (CSV)](Comma Secparated Values (CSV)), [YAML Ain't Markup Language (YAML)](YAML Ain't Markup Language (YAML)), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Data](Data), [sprintf](sprintf), [printf()](printf()), [INI](INI), [Leading Zero Means Octal](Leading Zero Means Octal), [Markdown](Markdown)
