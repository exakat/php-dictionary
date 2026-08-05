# Container Orchestration
Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets.

Without orchestration, deploying many containers manually is error-prone and does not scale. Orchestration platforms solve the operational burden of running containers in production.

Kubernetes is the dominant container orchestration platform. Docker Swarm is a simpler alternative built into Docker Engine. Managed cloud offerings, the like of AWS ECS, AWS EKS, Google GKE, Azure AKS, etc. run Kubernetes with reduced operational overhead.

PHP applications benefit from container orchestration through: horizontal scaling, like adding replicas under load, zero-downtime rolling deploys, like old pods kept alive until new pods are healthy, and self-healing, like crashed PHP-FPM pods are automatically restarted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/container-orchestration.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/container-orchestration.ini.html","name":"Container Orchestration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:14:28 +0000","dateModified":"Sat, 18 Jul 2026 05:14:28 +0000","description":"Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Container Orchestration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
# Scale a PHP deployment to 10 replicas
# kubectl scale deployment order-service --replicas=10

# Roll out a new image with zero downtime
# kubectl set image deployment/order-service php-fpm=myregistry/order-service:v2

# Horizontal Pod Autoscaler: scale based on CPU usage
apiVersion: autoscaling/v2
kind: HorizontalPodAutoscaler
metadata:
  name: order-service-hpa
spec:
  scaleTargetRef:
    apiVersion: apps/v1
    kind: Deployment
    name: order-service
  minReplicas: 2
  maxReplicas: 20
  metrics:
    - type: Resource
      resource:
        name: cpu
        target:
          type: Utilization
          averageUtilization: 70
```

**[Documentation](https://kubernetes.io/docs/concepts/overview/)**
## Related

+ [Kubernetes](kubernetes.ini.html)
+ [Docker](docker.ini.html)
+ [Docker Container](docker-container.ini.html)
+ [Microservice](microservice.ini.html)
+ [Scaling](scalability.ini.html)
+ [Load Balancer](load-balancer.ini.html)
