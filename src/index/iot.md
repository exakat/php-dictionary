# Internet of Things (IoT)
IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc. embedded with electronics and connectivity that enable them to collect and exchange data.

IoT systems generate continuous, high-volume event streams from many devices simultaneously. This data must be ingested, stored, processed, and acted upon in near real time. The backend architecture typically involves an MQTT or HTTP ingestion layer, a message queue or event stream, a time-series database, and a processing layer for anomaly detection, aggregation, and alerting.

PHP is not commonly used for IoT device firmware, which is typically C, Rust, or MicroPython, but it plays a role in IoT backend services: ``REST`` or ``MQTT APIs`` that receive device data, dashboards and reporting tools, and administrative interfaces for device management. Laravel, Symfony, and Slim are used for these backend roles.

``IoT`` is an initialism, not a strict numeronym, but is often listed alongside numeronyms like i18n and k8s in software engineering contexts.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iot.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iot.html","name":"Internet of Things (IoT)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:13:25 +0000","dateModified":"Tue, 07 Jul 2026 05:13:25 +0000","description":"IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Internet of Things (IoT).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"iot"}]}]}</script>
```php
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
```

**[Documentation](https://en.wikipedia.org/wiki/Internet_of_things)**
## See Also

+ [The Role of PHP in Internet of Things (IoT) Applications](https://moldstud.com/articles/p-the-role-of-php-in-internet-of-things-iot-applications)

## Related

+ [Event Streaming](event-streaming.html)
+ [Message Queue](message-queue.html)
+ [Edge Computing](edge-computing.html)
+ [Real Time](real-time.html)
+ [Websocket](websocket.html)

## Related packages

+ [php-mqtt/client](https://packagist.org/packages/php-mqtt/client)
