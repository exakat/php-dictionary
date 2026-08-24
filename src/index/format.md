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

It is possible to define one's custom format. Common formats have comprehensive specifications, such as how to build them, and assorted tools, to encode, decode, use, combine, etc.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html","name":"Format","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:22:04 +0000","dateModified":"Sat, 15 Aug 2026 08:22:04 +0000","description":"Format is a set of rules to structure a piece of text, and make it parsable by a specific engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/string.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yaml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sprintf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/printf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leading-zero-means-octal.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/markdown.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/File_format"},{"@type":"CreativeWork","name":"sprintf","url":"https:\/\/www.php.net\/manual\/en\/function.sprintf.php"},{"@type":"CreativeWork","name":"date","url":"https:\/\/www.php.net\/manual\/en\/function.date.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"format"}]}]}</script>
```php
<?php

    // displays 123 with 9 characters, and fills with dots any empty characters
    // ......123
    echo sprintf("%'.9d\n", 123);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/File_format)**
## See Also

+ [sprintf](https://www.php.net/manual/en/function.sprintf.php)
+ [date](https://www.php.net/manual/en/function.date.php)

## Related

+ [String](string.html)
+ [Comma Separated Values (CSV)](csv.html)
+ [YAML Ain't Markup Language (YAML)](yaml.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Data](data.html)
+ [sprintf](sprintf.html)
+ [printf()](printf.html)
+ [INI](ini.html)
+ [Leading Zero Means Octal](leading-zero-means-octal.html)
+ [Markdown](markdown.html)
