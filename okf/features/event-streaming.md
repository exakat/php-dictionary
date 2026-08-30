---
type: "concept"
title: "Event Streaming"
description: "Event streaming is a pattern where events are continuously published to an ordered, durable log, called a stream, and consumers read from that log at their own pace, independently of producers."
resource: "https://kafka.apache.org/documentation/"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Event Streaming

Event streaming is a pattern where events are continuously published to an ordered, durable log, called a stream, and consumers read from that log at their own pace, independently of producers. Unlike message queues, where a message is consumed once and deleted, a stream is retained and can be replayed, and multiple consumer groups can read the same events independently.

The key properties of event streaming are: persistence where events are stored durably, ordering where events within a partition are ordered, and replayability where consumers can reset their offset and re-read events from the beginning or any point in time. These properties make event streaming suitable for event sourcing, real-time analytics, change data capture, and building multiple independent views from the same event log.

Apache Kafka is the most widely used event streaming platform. AWS Kinesis and Google Cloud Pub/Sub provide managed alternatives. Producers publish events via the ``rdkafka`` extension or high-level libraries; consumers run as long-lived workers using RoadRunner, Swoole, or ReactPHP.

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

## Documentation
- [https://kafka.apache.org/documentation/](https://kafka.apache.org/documentation/)

## See Also
- [AWS Kinesis documentation](https://docs.aws.amazon.com/kinesis/)

## Related
- [Event Sourcing](/features/event-sourcing.md)
- [Event Driven](/features/event-driven.md)
- [Message Queue](/features/message-queue.md)
- [Pub/Sub](/features/pubsub.md)
- [Event Store](/features/event-store.md)
- [Event Replay](/features/event-replay.md)

## Details
- Extension: ext-rdkafka

