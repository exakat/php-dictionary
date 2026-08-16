# Stealth Generator
A function becomes a generator as soon as the ``yield`` keyword is added to the block of code. At that point, the function may be called, but it won't do anything until the ``yield`` is executed. The code continues its execution, though.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stealth-generator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stealth-generator.html","name":"Stealth Generator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:18 +0000","dateModified":"Tue, 11 Aug 2026 21:00:18 +0000","description":"A function becomes a generator as soon as the yield keyword is added to the block of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Stealth Generator.html"]}],"keywords":["classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-loading.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.generators.syntax.php"},{"@type":"CreativeWork","name":"Stealth generator in action","url":"https:\/\/3v4l.org\/p6niX"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"stealth-generator"}]}]}</script>
```php
<?php

function foo() {
    print a;
    yield 2;
    print b;
}

foo();
print c;

?>
```

**[Documentation](https://www.php.net/manual/en/language.generators.syntax.php)**
## See Also

+ [Stealth generator in action](https://3v4l.org/p6niX)

## Related

+ [Generator](generator.html)
+ [Yield](yield.html)
+ [yield from Keyword](yield-from.html)
+ [Coroutine](coroutine.html)
+ [Async](async.html)
+ [Lazy Loading](lazy-loading.html)
