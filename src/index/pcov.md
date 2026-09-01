# PCOV
``PCOV`` is a PIE extension dedicated to code coverage collection. It records which lines of code were executed during a test run, the same job Xdebug can do, but PCOV does only that, with none of Xdebug's step debugging, profiling, or tracing machinery, which makes it substantially faster.

Code coverage is used to measure how much of a codebase is exercised by a test suite, typically reported as a percentage of lines, branches, or functions covered. Test runners such as PHPUnit can drive PCOV directly through its API to produce coverage reports, for example in Clover XML or HTML.

Because it has a single purpose, PCOV is the preferred choice for coverage collection in CI pipelines where Xdebug would otherwise slow the run down considerably; Xdebug remains preferable when interactive step debugging is also needed.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcov.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcov.html","name":"PCOV","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:33:32 +0000","dateModified":"Tue, 14 Jul 2026 05:33:32 +0000","description":"PCOV is a PIE extension dedicated to code coverage collection","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcov.html"]}],"keywords":["extension","testing","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xdebug.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpunit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/testable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/packagist.org\/packages\/pecl\/pcov"},{"@type":"CreativeWork","name":"PCOV on github","url":"https:\/\/github.com\/krakjoe\/pcov"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pcov"}]}]}</script>
```php
<?php

    // PHPUnit driven with PCOV as the coverage driver:
    // vendor/bin/phpunit --coverage-html coverage/
    // (PHPUnit auto-detects and prefers PCOV over Xdebug when both are loaded.)

    // Low-level API, rarely called directly by application code.
    pcov\start();

    require 'code-under-test.php';

    $waiting = pcov\collect(pcov\inclusive, [__DIR__ . '/code-under-test.php']);
    pcov\clear();

    print_r($waiting);

?>
```

**[Documentation](https://packagist.org/packages/pecl/pcov)**
## See Also

+ [PCOV on github](https://github.com/krakjoe/pcov)

## Related

+ [Xdebug](xdebug.html)
+ [PHPunit](phpunit.html)
+ [Testable](testable.html)
+ [Green](green.html)
