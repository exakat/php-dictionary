# Distributed Systems
A distributed system is a collection of independent computers that appear to their users as a single coherent system. Components run on separate nodes, communicate via a network, and coordinate to achieve a common goal.

Distributed systems introduce a class of problems absent in single-process applications: partial failures where one node fails while others continue, network partitions where nodes cannot communicate, clock skew  where no shared global time exists, and concurrency across nodes.

The CAP theorem states that a distributed system can guarantee at most two of three properties simultaneously: consistency or all nodes see the same data, availability or every request gets a response, and partition tolerance or the system continues despite network splits. Real networks always partition, so the practical choice is between CP consistency over availability and AP availability over consistency, i.e., eventual consistency.

Distributed systems arise in microservices, multi-region deployments, distributed caches, such as Redis Cluster, Memcached, and queue-based architectures.
```php
<?php

    // PHP interacts with distributed systems through clients:
    
    // Redis Cluster — distributed key-value store
    $redis = new Redis();
    $redis->connect('redis-cluster.internal', 6379);
    $redis->set('session:abc', json_encode($sessionData), 3600);
    
    // RabbitMQ / SQS — distributed message passing
    $channel->basic_publish(
        new AMQPMessage(json_encode($payload)),
        exchange: '',
        routingKey: 'orders',
    );
    
    // HTTP service call — network may fail, retry with backoff
    $response = $httpClient->request('POST', 'https://payments.internal/charge', [
        'json'    => $payload,
        'timeout' => 3.0,
    ]);

?>
```

## See Also

+ [Building distributed systems with RoadRunner and Laravel](https://butschster.medium.com/building-true-distributed-systems-with-roadrunner-and-laravel-c018fbf0b643)

Related : [Microservice](Microservice), [Eventual Consistency](Eventual Consistency), [Fault Isolation](Fault Isolation), [Message Queue](Message Queue), [Resilience](Resilience), [CAP Theorem](CAP Theorem), [Distributed Tracing](Distributed Tracing), [Service Discovery](Service Discovery), [Service Registry](Service Registry), [Correlation ID](Correlation ID), [Distributed Transactions](Distributed Transactions), [Gearman](Gearman), [OpenTelemetry](OpenTelemetry), [RdKafka](RdKafka)
