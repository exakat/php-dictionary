# Readability
A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it.

Readable code may be understood on the spot, while unreadable code hides some important part of the process. 

Readability is a human characteristic of the code: it depends on the level of knowledge of the reader. Good naming is an important part of readability, as intention are conveyed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readability.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readability.ini.html","name":"Readability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 27 Jul 2026 16:15:05 +0000","dateModified":"Mon, 27 Jul 2026 16:15:05 +0000","description":"A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Readability.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Docblock](docblock.ini.html)
+ [Habit](habit.ini.html)
+ [Inlining](inlining.ini.html)
+ [Quality](quality.ini.html)
+ [Magic Numbers](magic-number.ini.html)
+ [Naming](naming.ini.html)
+ [Streamlining](streamlining.ini.html)
