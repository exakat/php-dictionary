.. _container-orchestration:
.. _orchestration:
.. meta::
	:description:
		Container Orchestration: Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Container Orchestration
	:twitter:description: Container Orchestration: Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Container Orchestration
	:og:type: article
	:og:description: Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/container-orchestration.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/container-orchestration.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/container-orchestration.ini.html","name":"Container Orchestration","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 14:58:13 +0000","dateModified":"Tue, 30 Jun 2026 14:58:13 +0000","description":"Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Container Orchestration.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Container Orchestration
-----------------------

Container orchestration is the automated management of the full lifecycle of containerised workloads across a cluster of machines: scheduling containers onto nodes, scaling replicas up or down, restarting failed containers, routing network traffic, managing rolling updates and rollbacks, and injecting configuration and secrets.

Without orchestration, deploying many containers manually is error-prone and does not scale. Orchestration platforms solve the operational burden of running containers in production.

Kubernetes is the dominant container orchestration platform. Docker Swarm is a simpler alternative built into Docker Engine. Managed cloud offerings (AWS ECS, AWS EKS, Google GKE, Azure AKS) run Kubernetes with reduced operational overhead.

PHP applications benefit from container orchestration through: horizontal scaling (adding replicas under load), zero-downtime rolling deploys (old pods kept alive until new pods are healthy), and self-healing (crashed PHP-FPM pods are automatically restarted).

.. code-block:: php
   
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


`Documentation <https://kubernetes.io/docs/concepts/overview/>`__

See also `Kubernetes: What is container orchestration? <https://kubernetes.io/docs/concepts/overview/>`_.

Related : :ref:`Kubernetes <kubernetes>`, :ref:`Docker <docker>`, :ref:`Docker Container <docker-container>`, :ref:`Microservice <microservice>`, :ref:`Scaling <scalability>`, :ref:`Load Balancer <load-balancer>`
