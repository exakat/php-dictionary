# Monotonic
A monotonic value only ever moves in one direction: it is either always non-decreasing or always non-increasing, and it never goes backward.

Applied to time, a monotonic clock is a time source that cannot jump backward or forward because of NTP synchronization, manual clock changes, or Daylight Saving Time. PHP exposes such a clock through ``hrtime()``, unlike ``microtime()`` or ``time()``, which read the wall clock and can be affected by these adjustments. Measuring an elapsed duration should always rely on a monotonic source, otherwise the computed duration could turn out negative.

Applied to identifiers or sequences, monotonic means each new value is guaranteed to be greater than the previous one, a property required by auto-increment database columns, ULIDs, and Snowflake-style distributed IDs.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monotonic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monotonic.html","name":"Monotonic","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:22:29 +0000","dateModified":"Mon, 17 Aug 2026 09:22:29 +0000","description":"A monotonic value only ever moves in one direction: it is either always non-decreasing or always non-increasing, and it never goes backward","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monotonic.html"]}],"keywords":["concept","time"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hrtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/clock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Monotonic_function"},{"@type":"CreativeWork","name":"High-Resolution Monotonic Timer","url":"https:\/\/thephp.cc\/articles\/high-resolution-monotonic-timer"},{"@type":"CreativeWork","name":"Getting the monotonic time","url":"https:\/\/drops-of-php.hi-folks.dev\/01-system\/13-sys-hrtime\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"monotonic"}]}]}</script>
```php
<?php

    $timeStart = hrtime(true);

    // some work happens here, even if the system clock is adjusted
    usleep(100);

    $timeEnd = hrtime(true);

    // always positive, thanks to the monotonic clock
    $elapsedNanoseconds = $timeEnd - $timeStart;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Monotonic_function)**
## See Also

+ [High-Resolution Monotonic Timer](https://thephp.cc/articles/high-resolution-monotonic-timer)
+ [Getting the monotonic time](https://drops-of-php.hi-folks.dev/01-system/13-sys-hrtime/)

## Related

+ [hrtime()](hrtime.html)
+ [Clock](clock.html)
+ [microtime()](microtime.html)
+ [Determinism](determinism.html)
