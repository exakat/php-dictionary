# One Liner
A one-liner refers to a concise and often single expression that accomplishes a specific task. It's a shorthand way of expressing functionality in a compact form. 

One liner are supposed to fit on one line. The line is also supposed to be limited in size. 

One liners tends to pack a lot of operations in one expression. When used aggressively, one liners become less readable, and more complex. 

Some commands have a short and a long syntax, such as ``if-then-else`` and the ternary operator ``condition ? then : else``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one-liner.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one-liner.html","name":"One Liner","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:41 +0000","dateModified":"Fri, 19 Jun 2026 21:26:41 +0000","description":"A one-liner refers to a concise and often single expression that accomplishes a specific task","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/One Liner.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"One Liner"}]}]}</script>
```php
<?php

    // one-liner
    $condition ? doSomething() : doSomethingElse();
    
    // equivalent to above, not a one liner
    if ($condition) {
        doSomething();
    } else {
        doSomethingElse();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/One-liner_program)**
## See Also

+ [Avoiding one-liners in PHP](https://localheinz.com/articles/2023/03/18/avoiding-one-liners-in-php/)
+ [Deconstructing PHP ‘One-liner’ Webshells](https://tanzilr.medium.com/decontructing-php-one-liner-webshells-625f6cbb96ff)

## Related

+ [Webshell](webshell.html)
+ [Golf](golf.html)
