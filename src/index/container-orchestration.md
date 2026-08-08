# Container Orchestration
Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets.

Without orchestration, deploying many containers manually is error-prone and does not scale. Orchestration platforms solve the operational burden of running containers in production.

Kubernetes is the dominant container orchestration platform. Docker Swarm is a simpler alternative built into Docker Engine. Managed cloud offerings, the like of AWS ECS, AWS EKS, Google GKE, Azure AKS, etc. run Kubernetes with reduced operational overhead.

PHP applications benefit from container orchestration through: horizontal scaling, like adding replicas under load, zero-downtime rolling deploys, like old pods kept alive until new pods are healthy, and self-healing, like crashed PHP-FPM pods are automatically restarted.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/container-orchestration.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/container-orchestration.html","name":"Container Orchestration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:14:28 +0000","dateModified":"Sat, 18 Jul 2026 05:14:28 +0000","description":"Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Container Orchestration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Container Orchestration"}]}]}</script>
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

+ [Kubernetes](kubernetes.html)
+ [Docker](docker.html)
+ [Docker Container](docker-container.html)
+ [Microservice](microservice.html)
+ [Scaling](scalability.html)
+ [Load Balancer](load-balancer.html)
