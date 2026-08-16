# Non Breakable Spaces
Space is one of the base ASCII characters. They are often used to separate words, and are forbidden from being used in names. 

PHP supports Unicode characters, and some of the characters are called: non breaking spaces. They behave like a space, by displaying a blank area. Yet, they are recognized internally as a non-space, and can be used in a name.

Non-breakable spaces are useful for tests, as they make the testing name more readable. They are also quite rare, and confusing for newcomers.

Unbreakable space is ``\u{00A0}`` as a PHP escape sequence, or ``\xc2\xa0`` as ASCII characters; it is the HTML escape sequence ``&nbsp;``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-breakable-space.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/non-breakable-space.html","name":"Non Breakable Spaces","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:01:31 +0000","dateModified":"Tue, 11 Aug 2026 21:01:31 +0000","description":"Space is one of the base ASCII characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Non Breakable Spaces.html"]}],"alternateName":["unbreakable-space"],"keywords":["character","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/space.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trim.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Non-breaking_space"},{"@type":"CreativeWork","name":"Non breakable space in PHP","url":"https:\/\/3v4l.org\/ATkWY"},{"@type":"CreativeWork","name":"Handling Invisible characters with PHP","url":"https:\/\/dev.to\/yasserelgammal\/handling-invisible-characters-with-php-1507"},{"@type":"CreativeWork","name":"Non-Breaking Spaces and UTF-8 Madness","url":"https:\/\/www.bigmessowires.com\/2021\/10\/14\/non-breaking-spaces-and-utf-8-madness\/"},{"@type":"CreativeWork","name":"Using non-breakable spaces in test method names","url":"https:\/\/mnapoli.fr\/using-non-breakable-spaces-in-test-method-names"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"non-breakable-space"}]}]}</script>
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
