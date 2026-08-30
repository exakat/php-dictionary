---
type: "PHP Feature"
title: "Percentile"
description: "A percentile is a statistical measure indicating the value below which a given percentage of observations in a dataset fall."
resource: "https://en.wikipedia.org/wiki/Percentile"
tags: ["monitoring", "statistics"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Percentile

A percentile is a statistical measure indicating the value below which a given percentage of observations in a dataset fall. The 95th percentile, ``p95``, is the value below which 95% of the observations lie; the remaining 5% are equal to or greater than it.

In monitoring and performance analysis, percentiles are used to summarize distributions of measurements, such as request latency or response time, in a way an average cannot: an average is easily skewed by a few very fast requests, and it hides the experience of the slowest users. ``p50``, the median, ``p95``, and ``p99`` are commonly reported together, alongside the average, to describe both the typical case and the tail of a distribution.

Service Level Agreements often use percentiles for their commitments, for example ``95% of requests complete in under 200ms``, rather than an average, because tail latency is what real users notice.

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

## Documentation
- [https://en.wikipedia.org/wiki/Percentile](https://en.wikipedia.org/wiki/Percentile)

## See Also
- [Histograms and summaries](https://prometheus.io/docs/practices/histograms/)

## Related
- [Monitoring](/features/monitoring.md)
- [Service Level Agreement (SLA)](/features/sla.md)
- [Metrics](/features/metrics.md)
- [Application Performance Management (APM)](/features/apm.md)
- [Performance](/features/performance.md)
- [Latency](/features/latency.md)

