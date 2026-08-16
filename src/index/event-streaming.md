# Event Streaming
Event streaming is a pattern where events are continuously published to an ordered, durable log, called a stream, and consumers read from that log at their own pace, independently of producers. Unlike message queues, where a message is consumed once and deleted, a stream is retained and can be replayed, and multiple consumer groups can read the same events independently.

The key properties of event streaming are: persistence where events are stored durably, ordering where events within a partition are ordered, and replayability where consumers can reset their offset and re-read events from the beginning or any point in time. These properties make event streaming suitable for event sourcing, real-time analytics, change data capture, and building multiple independent views from the same event log.

Apache Kafka is the most widely used event streaming platform. AWS Kinesis and Google Cloud Pub/Sub provide managed alternatives. Producers publish events via the ``rdkafka`` extension or high-level libraries; consumers run as long-lived workers using RoadRunner, Swoole, or ReactPHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-streaming.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-streaming.html","name":"Event Streaming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:31:41 +0000","dateModified":"Sun, 09 Aug 2026 13:31:41 +0000","description":"Event streaming is a pattern where events are continuously published to an ordered, durable log, called a stream, and consumers read from that log at their own pace, independently of producers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Event Streaming.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"event-streaming"}]}]}</script>
```php
<?php

    // Producer: publish an event to a Kafka topic
    $conf = new RdKafka\Conf();
    $conf->set('metadata.broker.list', 'kafka:9092');
    
    $producer = new RdKafka\Producer($conf);
    $topic    = $producer->newTopic('orders');
    
    $topic->produce(RD_KAFKA_PARTITION_UA, 0, json_encode([
        'event'     => 'OrderPlaced',
        'orderId'   => 42,
        'total'     => 9900,
        'timestamp' => time(),
    ]));
    
    $producer->flush(1000);
    
    // Consumer: read events independently, at own pace
    $conf->set('group.id', 'inventory-service');
    $conf->set('auto.offset.reset', 'earliest'); // replay from beginning if needed
    
    $consumer = new RdKafka\KafkaConsumer($conf);
    $consumer->subscribe(['orders']);
    
    while (true) {
        $message = $consumer->consume(1000);
        if ($message->err === RD_KAFKA_RESP_ERR_NO_ERROR) {
            $event = json_decode($message->payload, true);
            // process independently from the producer
        }
    }

?>
```

**[Documentation](https://kafka.apache.org/documentation/)**
## See Also

+ [AWS Kinesis documentation](https://docs.aws.amazon.com/kinesis/)

## Related

+ [Event Sourcing](event-sourcing.html)
+ [Event Driven](event-driven.html)
+ [Message Queue](message-queue.html)
+ [Pub/Sub](pubsub.html)
+ [Event Store](event-store.html)
+ [Event Replay](event-replay.html)
