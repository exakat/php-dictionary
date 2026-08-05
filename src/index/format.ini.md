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
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/format.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/format.ini.html","name":"Format","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:33:01 +0000","dateModified":"Mon, 20 Jul 2026 08:33:01 +0000","description":"Format is a set of rules to structure a piece of text, and make it parsable by a specific engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Format.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // displays 123 with 9 characters, and fills with dots any empty characters
    // ......123
    echo sprintf("%'.9d\n", 123);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/File_format)**
## Related

+ [String](string.ini.html)
+ [Comma Secparated Values (CSV)](csv.ini.html)
+ [YAML Ain't Markup Language (YAML)](yaml.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Data](data.ini.html)
+ [sprintf](sprintf.ini.html)
+ [printf()](printf.ini.html)
+ [INI](ini.ini.html)
+ [Leading Zero Means Octal](leading-zero-means-octal.ini.html)
+ [Markdown](markdown.ini.html)
