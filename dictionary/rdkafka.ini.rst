.. _rdkafka:
.. meta::
	:description:
		RdKafka: ``rdkafka`` is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RdKafka
	:twitter:description: RdKafka: ``rdkafka`` is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RdKafka
	:og:type: article
	:og:description: ``rdkafka`` is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rdkafka.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rdkafka.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rdkafka.ini.html","name":"RdKafka","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:37:38 +0000","dateModified":"Tue, 14 Jul 2026 05:37:38 +0000","description":"``rdkafka`` is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RdKafka.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RdKafka
-------

``rdkafka`` is a PIE extension providing a PHP client for Apache Kafka, a distributed event-streaming platform. It is a binding around ``librdkafka``, the widely used C client for Kafka, and exposes producer and consumer classes for publishing and reading messages from Kafka topics.

A producer sends messages to a named topic, optionally partitioned by a key, and Kafka retains them for a configurable retention period regardless of whether consumers have read them yet, which is what distinguishes Kafka from a traditional message queue: multiple independent consumer groups can each read the same stream of events at their own pace.

Kafka, and by extension this driver, is commonly used for event-driven architectures, log aggregation, and streaming data pipelines, where the durability and replay-ability of the event log matters more than the low-latency point-to-point delivery that a queue such as Gearman or RabbitMQ provides.

.. code-block:: php
   
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


`Documentation <https://github.com/arnaud-lb/php-rdkafka>`__

See also `Apache Kafka <https://kafka.apache.org/>`_.

Related : :ref:`Gearman <gearman>`, :ref:`Queue <queue>`, :ref:`Event Driven <event-driven>`, :ref:`Distributed Systems <distributed-systems>`
