.. _iot:
.. _internet-of-things:
.. _connected-devices:
.. meta::
	:description:
		Internet of Things (IoT): IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Internet of Things (IoT)
	:twitter:description: Internet of Things (IoT): IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Internet of Things (IoT)
	:og:type: article
	:og:description: IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iot.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Internet of Things (IoT)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:13:25 +0000","dateModified":"Tue, 07 Jul 2026 05:13:25 +0000","description":"IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Internet of Things (IoT).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Internet of Things (IoT)
------------------------

IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc. embedded with electronics and connectivity that enable them to collect and exchange data.

IoT systems generate continuous, high-volume event streams from many devices simultaneously. This data must be ingested, stored, processed, and acted upon in near real time. The backend architecture typically involves an MQTT or HTTP ingestion layer, a message queue or event stream, a time-series database, and a processing layer for anomaly detection, aggregation, and alerting.

PHP is not commonly used for IoT device firmware, which is typically C, Rust, or MicroPython, but it plays a role in IoT backend services: ``REST`` or ``MQTT APIs`` that receive device data, dashboards and reporting tools, and administrative interfaces for device management. Laravel, Symfony, and Slim are used for these backend roles.

``IoT`` is an initialism, not a strict numeronym, but is often listed alongside numeronyms like i18n and k8s in software engineering contexts.

.. code-block:: php
   
   <?php
   
   // PHP MQTT consumer: receive sensor readings from IoT devices
   // Requires a MQTT client library (e.g., php-mqtt/client)
   
   use PhpMqtt\Client\MqttClient;
   
   $mqtt = new MqttClient('mqtt-broker.internal', 1883, 'php-backend');
   $mqtt->connect();
   
   $mqtt->subscribe('sensors/temperature/#', function (string $topic, string $message) {
       $data     = json_decode($message, true);
       $deviceId = basename($topic);
   
       // Store in time-series DB (InfluxDB example)
       $this->influx->writePoint('temperature', [
           'device' => $deviceId,
           'value'  => $data['value'],
       ]);
   
       if ($data['value'] > 80.0) {
           $this->alerting->trigger('High temperature on ' . $deviceId . ': ' . $data['value'] . '°C');
       }
   }, 0);
   
   $mqtt->loop();
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Internet_of_things>`__

See also `The Role of PHP in Internet of Things (IoT) Applications <https://moldstud.com/articles/p-the-role-of-php-in-internet-of-things-iot-applications>`_.

Related : :ref:`Event Streaming <event-streaming>`, :ref:`Message Queue <message-queue>`, :ref:`Edge Computing <edge-computing>`, :ref:`Real Time <real-time>`, :ref:`Websocket <websocket>`

Related packages : `php-mqtt/client <https://packagist.org/packages/php-mqtt/client>`_
