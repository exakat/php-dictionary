---
type: "concept"
title: "Streaming Database"
description: "A streaming database is a database engine that runs continuous SQL queries directly over unbounded data streams, maintaining incrementally updated materialized views instead of static tables."
resource: "https://risingwave.com/blog/what-is-a-streaming-database-1/"
tags: ["database", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Streaming Database

A streaming database is a database engine that runs continuous SQL queries directly over unbounded data streams, maintaining incrementally updated materialized views instead of static tables.

Unlike a batch pipeline, which pulls data on a schedule and recomputes results from scratch, a streaming database keeps its views up to date incrementally, as new events arrive, delivering sub-second freshness without a separate ETL step.

A streaming database differs from event streaming: event streaming, such as Kafka, is about durably publishing and consuming an ordered log of events. A streaming database sits on top of such a log, or ingests change data capture, and lets developers query it with plain SQL, joins, aggregations and time windows included.

Popular streaming databases include RisingWave, which is PostgreSQL wire-protocol compatible, Materialize, and ksqlDB, which is built on top of Kafka Streams.

```php
<?php

    // RisingWave speaks the PostgreSQL wire protocol: PDO's pgsql driver works as-is
    $pdo = new PDO('pgsql:host=localhost;port=4566;dbname=dev', 'root', '');

    // Continuous materialized view: kept incrementally up to date as orders arrive
    $pdo->exec('
        CREATE MATERIALIZED VIEW revenue_per_minute AS
        SELECT window_start, SUM(total) AS revenue
        FROM TUMBLE(orders, order_time, INTERVAL \'1\' MINUTE)
        GROUP BY window_start
    ');

    $rows = $pdo->query('SELECT * FROM revenue_per_minute ORDER BY window_start DESC LIMIT 10');
    foreach ($rows as $row) {
        echo $row['window_start'] . ': ' . $row['revenue'] . PHP_EOL;
    }

?>
```

## Documentation
- [https://risingwave.com/blog/what-is-a-streaming-database-1/](https://risingwave.com/blog/what-is-a-streaming-database-1/)

## See Also
- [Materialize](https://materialize.com/)
- [The Comprehensive Guide to ksqlDB](https://risingwave.com/blog/the-comprehensive-guide-to-ksqldb/)

## Related
- [Event Streaming](/features/event-streaming.md)
- [Column Database](/features/column-database.md)
- [Real Time](/features/real-time.md)
- [Event Driven](/features/event-driven.md)
- [Database](/features/database.md)

## Details
- Extension: ext-pgsql

