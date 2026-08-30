---
type: "concept"
title: "Open Data"
description: "Open data is information, often collected or produced by public bodies, that is made freely available for anyone to access, use, and redistribute, usually under a permissive or open license and with no more than a reasonable reproduction cost."
resource: "https://opendatahandbook.org/guide/en/what-is-open-data/"
tags: ["concept", "data"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Open Data

Open data is information, often collected or produced by public bodies, that is made freely available for anyone to access, use, and redistribute, usually under a permissive or open license and with no more than a reasonable reproduction cost.

To qualify as open, data must also be published in a structured, machine-readable format, such as ``CSV``, ``JSON``, or ``XML``, so that it can be processed automatically rather than only read by a human. It is frequently exposed through a public API alongside static file downloads.

PHP applications typically consume open data with an HTTP client, such as ``curl`` or Guzzle, and then parse the response with native functions like ``json_decode()``, or with ``SplFileObject`` for CSV feeds.

```php
<?php

    $json = file_get_contents('https://data.example.gov/api/dataset.json');
    $dataset = json_decode($json, true);

    foreach ($dataset['records'] as $record) {
        echo $record['name'] . PHP_EOL;
    }

?>
```

## Documentation
- [https://opendatahandbook.org/guide/en/what-is-open-data/](https://opendatahandbook.org/guide/en/what-is-open-data/)

## See Also
- [What is open data](https://data.europa.eu/en/dataeuropa-academy/what-open-data)
- [The 8 Principles of Open Government Data](https://opengovdata.org/)

## Related
- [Data](/features/data.md)
- [Dataset](/features/dataset.md)
- [Comma Separated Values (CSV)](/features/csv.md)
- [json_decode()](/features/json_decode.md)
- [Application Programming Interface (API)](/features/api.md)

