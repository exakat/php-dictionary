.. _kubernetes:
.. _k8s:
.. _kube:
.. meta::
	:description:
		Kubernetes: Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Kubernetes
	:twitter:description: Kubernetes: Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Kubernetes
	:og:type: article
	:og:description: Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/kubernetes.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/kubernetes.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/kubernetes.ini.html","name":"Kubernetes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:23:52 +0000","dateModified":"Tue, 14 Jul 2026 05:23:52 +0000","description":"Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Kubernetes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Kubernetes
----------

Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications. Originally developed by Google, it is now maintained by the CNCF.

The core abstractions in Kubernetes are: ``Pod``, the smallest deployable unit, one or more containers sharing a network namespace, ``Deployment``, declarative specification of desired pod replicas, ``Service``, stable network endpoint for a set of pods, ``Ingress``, HTTP routing from outside the cluster, ``ConfigMap`` and ``Secret``, configuration injection, and ``HorizontalPodAutoscaler``, automatic scaling based on CPU/memory or custom metrics.

PHP applications are deployed on Kubernetes as Docker containers, typically using PHP-FPM with nginx or Caddy as the HTTP front-end, or as FrankenPHP/Swoole workers. The Kubernetes service layer provides built-in service discovery via DNS. Kubernetes is the most common runtime for PHP microservices at scale.

``k8s`` is the numeronym for Kubernetes: 8 letters between K and s.

.. code-block:: php
   
   # deployment.yaml — PHP-FPM application on Kubernetes
   apiVersion: apps/v1
   kind: Deployment
   metadata:
     name: order-service
   spec:
     replicas: 3
     selector:
       matchLabels:
         app: order-service
     template:
       metadata:
         labels:
           app: order-service
       spec:
         containers:
           - name: php-fpm
             image: myregistry/order-service:latest
             ports:
               - containerPort: 9000
             env:
               - name: DATABASE_URL
                 valueFrom:
                   secretKeyRef:
                     name: db-secret
                     key: url
           - name: nginx
             image: nginx:alpine
             ports:
               - containerPort: 80
   ---
   apiVersion: v1
   kind: Service
   metadata:
     name: order-service
   spec:
     selector:
       app: order-service
     ports:
       - port: 80


`Documentation <https://kubernetes.io/docs/home/>`__

See also `How To Deploy PHP Application On Kubernetes ? <https://www.geeksforgeeks.org/devops/how-to-deploy-php-application-on-kubernetes/>`_.

Related : :ref:`Docker <docker>`, :ref:`Container Orchestration <container-orchestration>`, :ref:`Microservice <microservice>`, :ref:`Service Discovery <service-discovery>`, :ref:`Load Balancer <load-balancer>`, :ref:`Numeronym <numeronym>`
