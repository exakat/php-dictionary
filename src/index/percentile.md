# Percentile
A percentile is a statistical measure indicating the value below which a given percentage of observations in a dataset fall. The 95th percentile, ``p95``, is the value below which 95% of the observations lie; the remaining 5% are equal to or greater than it.

In monitoring and performance analysis, percentiles are used to summarize distributions of measurements, such as request latency or response time, in a way an average cannot: an average is easily skewed by a few very fast requests, and it hides the experience of the slowest users. ``p50``, the median, ``p95``, and ``p99`` are commonly reported together, alongside the average, to describe both the typical case and the tail of a distribution.

Service Level Agreements often use percentiles for their commitments, for example ``95% of requests complete in under 200ms``, rather than an average, because tail latency is what real users notice.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/percentile.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/percentile.html","name":"Percentile","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:21:30 +0000","dateModified":"Wed, 19 Aug 2026 08:21:30 +0000","description":"A percentile is a statistical measure indicating the value below which a given percentage of observations in a dataset fall","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/percentile.html"]}],"keywords":["monitoring","statistics"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monitoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sla.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metrics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/apm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/latency.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Percentile"},{"@type":"CreativeWork","name":"Histograms and summaries","url":"https:\/\/prometheus.io\/docs\/practices\/histograms\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"percentile"}]}]}</script>
```php
<?php

    function percentile(array $values, float $p): float {
        sort($values);
        $index = ($p / 100) * (count($values) - 1);
        $lower = (int) floor($index);
        $upper = (int) ceil($index);
        if ($lower === $upper) {
            return $values[$lower];
        }
        $fraction = $index - $lower;
        return $values[$lower] + $fraction * ($values[$upper] - $values[$lower]);
    }

    $latencies = [12, 45, 20, 300, 18, 22, 40, 15, 19, 500];
    echo percentile($latencies, 95); // p95 latency

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Percentile)**
## See Also

+ [Histograms and summaries](https://prometheus.io/docs/practices/histograms/)

## Related

+ [Monitoring](monitoring.html)
+ [Service Level Agreement (SLA)](sla.html)
+ [Metrics](metrics.html)
+ [Application Performance Management (APM)](apm.html)
+ [Performance](performance.html)
+ [Latency](latency.html)
