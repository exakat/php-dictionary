.. _event-streaming:
.. _event-stream:
.. _stream-processing:
.. meta::
	:description:
		Event Streaming: Event streaming is a pattern where events are continuously published to an ordered, durable log (a stream), and consumers read from that log at their own pace, independently of producers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Event Streaming
	:twitter:description: Event Streaming: Event streaming is a pattern where events are continuously published to an ordered, durable log (a stream), and consumers read from that log at their own pace, independently of producers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Event Streaming
	:og:type: article
	:og:description: Event streaming is a pattern where events are continuously published to an ordered, durable log (a stream), and consumers read from that log at their own pace, independently of producers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/event-streaming.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Event Streaming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 15:15:02 +0000","dateModified":"Tue, 30 Jun 2026 15:15:02 +0000","description":"Event streaming is a pattern where events are continuously published to an ordered, durable log (a stream), and consumers read from that log at their own pace, independently of producers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Event Streaming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Event Streaming
---------------

Event streaming is a pattern where events are continuously published to an ordered, durable log (a stream), and consumers read from that log at their own pace, independently of producers. Unlike message queues (where a message is consumed once and deleted), a stream is retained and can be replayed, and multiple consumer groups can read the same events independently.

The key properties of event streaming are: persistence (events are stored durably), ordering (events within a partition are ordered), and replayability (consumers can reset their offset and re-read events from the beginning or any point in time). These properties make event streaming suitable for event sourcing, real-time analytics, change data capture, and building multiple independent views from the same event log.

Apache Kafka is the most widely used event streaming platform. AWS Kinesis and Google Cloud Pub/Sub provide managed alternatives. In PHP, producers publish events via the ``rdkafka`` extension or high-level libraries; consumers run as long-lived workers using RoadRunner, Swoole, or ReactPHP.

.. code-block:: php
   
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


`Documentation <https://kafka.apache.org/documentation/>`__

See also `Apache Kafka documentation <https://kafka.apache.org/documentation/>`_.

Related : :ref:`Event Sourcing <event-sourcing>`, :ref:`Event Driven <event-driven>`, :ref:`Message Queue <message-queue>`, :ref:`Pub/Sub <pubsub>`, :ref:`Event Store <event-store>`, :ref:`Event Replay <event-replay>`
