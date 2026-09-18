# RdKafka
``rdkafka`` is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform. It is a binding around ``librdkafka``, the widely used C client for Kafka, and exposes producer and consumer classes for publishing and reading messages from Kafka topics.

A producer sends messages to a named topic, optionally partitioned by a key, and Kafka retains them for a configurable retention period regardless of whether consumers have read them yet, which is what distinguishes Kafka from a traditional message queue: multiple independent consumer groups can each read the same stream of events at their own pace.

Kafka, and by extension this driver, is commonly used for event-driven architectures, log aggregation, and streaming data pipelines, where the durability and replay-ability of the event log matters more than the low-latency point-to-point delivery that a queue such as Gearman or RabbitMQ provides.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdkafka.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdkafka.html","name":"RdKafka","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 18 Sep 2026 05:06:57 +0000","dateModified":"Fri, 18 Sep 2026 05:06:57 +0000","description":"rdkafka is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdkafka.html"]}],"keywords":["extension","queue"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gearman.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/queue.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-systems.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/github.com\/arnaud-lb\/php-rdkafka"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.37","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rdkafka"}]}]}</script>
```php
<?php

    // Producer
    $conf = new RdKafka\Conf();
    $conf->set('metadata.broker.list', 'localhost:9092');
    $producer = new RdKafka\Producer($conf);
    $topic = $producer->newTopic('orders');
    $topic->produce(RD_KAFKA_PARTITION_UA, 0, json_encode(['id' => 1]));
    $producer->flush(2000);

    // Consumer
    $consumerConf = new RdKafka\Conf();
    $consumerConf->set('group.id', 'order-service');
    $consumerConf->set('metadata.broker.list', 'localhost:9092');
    $consumer = new RdKafka\KafkaConsumer($consumerConf);
    $consumer->subscribe(['orders']);

    $message = $consumer->consume(10000);
    echo $message->payload;

?>
```

**[Documentation](https://github.com/arnaud-lb/php-rdkafka)**
## Related

+ [Gearman](gearman.html)
+ [Queue](queue.html)
+ [Event Driven](event-driven.html)
+ [Distributed Systems](distributed-systems.html)
