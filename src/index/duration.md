# Duration
The ``Time\Duration`` class is a PHP 8.6 addition that represents a measurable amount of time, such as a timeout, a delay or an elapsed period. It is a ``final readonly`` class that stores seconds and nanoseconds, so it is precise to the nanosecond.

Duration is meant for stopwatch-style time. It is different from ``DateInterval``, which suits calendar arithmetic such as one calendar month later.

Instances are created with static factory methods: ``fromSeconds()``, ``fromNanoseconds()``, ``fromMicroseconds()``, ``fromMilliseconds()``, ``fromMinutes()``, ``fromHours()``, and ``fromIso8601DurationString()`` for ISO 8601 strings such as ``PT1H30M``. The single-value factories reject negative input.

Arithmetic returns a new instance: ``add()``, ``sub()``, ``multiplyBy()``, ``divideBy()``, ``negate()`` and ``absolute()``. ``divideBy()`` truncates fractional nanoseconds. ``Duration::compare()`` returns -1, 0 or 1, and it is used by ``usort()``. The ``<`` and related comparison operators work too.

The public properties are ``seconds``, ``nanoseconds`` and ``negative``. Operations that overflow the range throw ``Time\TimeException``, which extends ``Exception``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/duration.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/duration.html","name":"Duration","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 09 Oct 2026 16:29:52 +0000","dateModified":"Fri, 09 Oct 2026 16:29:52 +0000","description":"The Time\\Duration class is a PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/duration.html"]}],"alternateName":["time-duration","duration-class"],"keywords":["class","time"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dateinterval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polling-api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/datetime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/timeout.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/wiki.php.net\/rfc\/duration_class"},{"@type":"CreativeWork","name":"PHP 8.6 RFC: Duration class","url":"https:\/\/wiki.php.net\/rfc\/duration_class"},{"@type":"CreativeWork","name":"PHP Dev RFC: Duration class","url":"https:\/\/discourse.thephp.foundation\/t\/php-dev-rfc-duration-class\/5608"},{"@type":"CreativeWork","name":"PHP Duration class in PHP 8.6 (SensioLabs)","url":"https:\/\/sensiolabs.com\/blog\/2026\/php-duration-class"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"duration"}]}]}</script>
```php
<?php

use Time\Duration;

$oneSecond  = Duration::fromSeconds(1);
$halfSecond = $oneSecond->divideBy(2);

$onePointFiveSeconds = $oneSecond->add($halfSecond);

$baseDelay = Duration::fromMilliseconds(100);
$attempt   = 5;
$delay     = $baseDelay->multiplyBy(2 ** $attempt); // 3.2 seconds

$durations = [$oneSecond, $onePointFiveSeconds, $halfSecond];
usort($durations, Duration::compare(...));          // 0.5s, 1s, 1.5s

?>
```

**[Documentation](https://wiki.php.net/rfc/duration_class)**
## See Also

+ [PHP 8.6 RFC: Duration class](https://wiki.php.net/rfc/duration_class)
+ [PHP Dev RFC: Duration class](https://discourse.thephp.foundation/t/php-dev-rfc-duration-class/5608)
+ [PHP Duration class in PHP 8.6 (SensioLabs)](https://sensiolabs.com/blog/2026/php-duration-class)

## Related

+ [DateInterval](dateinterval.html)
+ [Polling API](polling-api.html)
+ [DateTime](datetime.html)
+ [Timeout](timeout.html)
