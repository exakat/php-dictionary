# Readability
A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it.

Readable code may be understood on the spot, while unreadable code hides some important part of the process. 

Readability is a human characteristic of the code: it depends on the level of knowledge of the reader. Good naming is an important part of readability, as intention are conveyed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readability.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readability.html","name":"Readability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Readability.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"readability"}]}]}</script>
```php
<?php

    // all explicit alphabet
    $alphabet = array ( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    
    // readable with knowledge of range() function
    $alphabet = range('a', 'z');
    
    // generic name for a partial list of letter: many questions hang
    $array = range('a', 'l');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Readability)**
## See Also

+ [The Complete Guide to Readable Code: 11 Principles](https://fellow.app/blog/engineering/the-complete-guide-to-readable-code/)
+ [Why Code Readability is important](https://thehosk.medium.com/why-code-readability-is-important-e0c228a238a)
+ [How to write readable code?](https://suckup.de/2020/07/how-to-write-readable-code/)
+ [Refactoring PHP Code for Better Readability](https://deliciousbrains.com/refactoring-php-code-better-readability/)

## Related

+ [Docblock](docblock.html)
+ [Habit](habit.html)
+ [Inlining](inlining.html)
+ [Quality](quality.html)
+ [Magic Numbers](magic-number.html)
+ [Naming](naming.html)
+ [Streamlining](streamlining.html)
