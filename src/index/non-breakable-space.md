# Non Breakable Spaces
Space is one of the base ASCII characters. They are often used to separate words, and are forbidden from being used in names. 

PHP supports Unicode characters, and some of the characters are called: non breaking spaces. They behave like a space, by displaying a blank area. Yet, they are recognized internally as a non-space, and can be used in a name.

Non-breakable spaces are useful for tests, as they make the testing name more readable. They are also quite rare, and confusing for newcomers.

Unbreakable spaces is ``\u{00A0}`` as a PHP escape sequence, or ``\xc2\xa0`` as ASCII characters; it is the HTML escape sequence ``&nbsp;``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-breakable-space.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-breakable-space.html","name":"Non Breakable Spaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Space is one of the base ASCII characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Non Breakable Spaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Non Breakable Spaces"}]}]}</script>
```php
<?php

    // This is a space, PHP doesn't compile this code
    const A B = 1;

    // This is a non breakabe space, it compile and is not visibly different from the line above
    const A B = 1;
    echo A B;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Non-breaking_space)**
## See Also

+ [Non breakable space in PHP](https://3v4l.org/ATkWY)
+ [Handling Invisible characters with PHP](https://dev.to/yasserelgammal/handling-invisible-characters-with-php-1507)
+ [Non-Breaking Spaces and UTF-8 Madness](https://www.bigmessowires.com/2021/10/14/non-breaking-spaces-and-utf-8-madness/)
+ [Using non-breakable spaces in test method names](https://mnapoli.fr/using-non-breakable-spaces-in-test-method-names)

## Related

+ [Space](space.html)
+ [trim](trim.html)
