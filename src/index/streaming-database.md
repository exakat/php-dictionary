# Streaming Database
A streaming database is a database engine that runs continuous SQL queries directly over unbounded data streams, maintaining incrementally updated materialized views instead of static tables.

Unlike a batch pipeline, which pulls data on a schedule and recomputes results from scratch, a streaming database keeps its views up to date incrementally, as new events arrive, delivering sub-second freshness without a separate ETL step.

A streaming database differs from event streaming: event streaming, such as Kafka, is about durably publishing and consuming an ordered log of events. A streaming database sits on top of such a log, or ingests change data capture, and lets developers query it with plain SQL, joins, aggregations and time windows included.

Popular streaming databases include RisingWave, which is PostgreSQL wire-protocol compatible, Materialize, and ksqlDB, which is built on top of Kafka Streams.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streaming-database.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streaming-database.html","name":"Streaming Database","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:10:58 +0000","dateModified":"Mon, 24 Aug 2026 07:10:58 +0000","description":"A streaming database is a database engine that runs continuous SQL queries directly over unbounded data streams, maintaining incrementally updated materialized views instead of static tables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/streaming-database.html"]}],"alternateName":["streaming-sql-database"],"keywords":["database","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-streaming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/column-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/real-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/risingwave.com\/blog\/what-is-a-streaming-database-1\/"},{"@type":"CreativeWork","name":"Materialize","url":"https:\/\/materialize.com\/"},{"@type":"CreativeWork","name":"The Comprehensive Guide to ksqlDB","url":"https:\/\/risingwave.com\/blog\/the-comprehensive-guide-to-ksqldb\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"streaming-database"}]}]}</script>
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

**[Documentation](https://risingwave.com/blog/what-is-a-streaming-database-1/)**
## See Also

+ [Materialize](https://materialize.com/)
+ [The Comprehensive Guide to ksqlDB](https://risingwave.com/blog/the-comprehensive-guide-to-ksqldb/)

## Related

+ [Event Streaming](event-streaming.html)
+ [Column Database](column-database.html)
+ [Real Time](real-time.html)
+ [Event Driven](event-driven.html)
+ [Database](database.html)
