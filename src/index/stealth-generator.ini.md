# Stealth Generator
A function becomes a generator as soon as the ``yield`` keyword is added to the block of code. At that point, the function may be called, but it won't do anything until the ``yield`` are executed. The code continues its execution, though.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stealth-generator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stealth-generator.ini.html","name":"Stealth Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A function becomes a generator as soon as the ``yield`` keyword is added to the block of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Stealth Generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Generator](generator.ini.html)
+ [Yield](yield.ini.html)
+ [yield from Keyword](yield-from.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [Async](async.ini.html)
+ [Lazy Loading](lazy-loading.ini.html)
