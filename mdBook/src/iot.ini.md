# Internet of Things (IoT)
IoT, the Internet of Things, refers to the network of physical devices, such as sensors, actuators, vehicles, appliances, industrial machines, etc. embedded with electronics and connectivity that enable them to collect and exchange data.

IoT systems generate continuous, high-volume event streams from many devices simultaneously. This data must be ingested, stored, processed, and acted upon in near real time. The backend architecture typically involves an MQTT or HTTP ingestion layer, a message queue or event stream, a time-series database, and a processing layer for anomaly detection, aggregation, and alerting.

PHP is not commonly used for IoT device firmware, which is typically C, Rust, or MicroPython, but it plays a role in IoT backend services: ``REST`` or ``MQTT APIs`` that receive device data, dashboards and reporting tools, and administrative interfaces for device management. Laravel, Symfony, and Slim are used for these backend roles.

``IoT`` is an initialism, not a strict numeronym, but is often listed alongside numeronyms like i18n and k8s in software engineering contexts.
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

## See Also

+ [The Role of PHP in Internet of Things (IoT) Applications](https://moldstud.com/articles/p-the-role-of-php-in-internet-of-things-iot-applications)

Related : [Event Streaming](Event Streaming), [Message Queue](Message Queue), [Edge Computing](Edge Computing), [Real Time](Real Time), [Websocket](Websocket)
