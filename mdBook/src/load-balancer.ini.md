# Load Balancer
A load balancer is a component that distributes incoming network traffic across multiple backend servers to improve availability, throughput, and fault tolerance.

During deployment, the load balancer sits in front of a pool of PHP application servers, typically PHP-FPM behind Nginx or Apache. When a request arrives, the load balancer forwards it to one of the available servers according to a strategy: round-robin, least connections, IP hash, or weighted distribution.

Because requests can land on any server, PHP applications behind a load balancer must be stateless or externalise their state:

+ Sessions must be stored in a shared backend server, not on the local filesystem
+ Uploaded files must be written to shared storage, like NFS, an S3-compatible object store
+ Caches should be shared or invalidated across all nodes
+ Any resource that must persist between calls must be stored in a common server

A load balancer also provides health checks, in order to remove unhealthy nodes automatically, SSL termination, and sticky sessions, where it is routing a user's requests to the same backend when true statelessness is not possible.
```php
<?php

    // Detect the real client IP behind a trusted load balancer
    $clientIp = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];

?>
```

## See Also

+ [Load Balancing PHP Applications](https://www.nginx.com/resources/glossary/load-balancing/)
+ [AWS Elastic Load Balancing with PHP](https://docs.aws.amazon.com/elasticloadbalancing/)

Related : [Horizontal Scaling](Horizontal Scaling), [Stateless](Stateless), [Session](Session), [Distributed State](Distributed State), [Server Architecture](Server Architecture), [Cache](Cache), [Docker](Docker), [Availability](Availability), [Container Orchestration](Container Orchestration), [Kubernetes](Kubernetes), [Quality of Service (QoS)](Quality of Service (QoS)), [Service Discovery](Service Discovery), [Service Registry](Service Registry)
