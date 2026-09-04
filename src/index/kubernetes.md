# Kubernetes
Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications. Originally developed by Google, it is now maintained by the CNCF.

The core abstractions in Kubernetes are: ``Pod``, the smallest deployable unit, one or more containers sharing a network namespace, ``Deployment``, declarative specification of desired pod replicas, ``Service``, stable network endpoint for a set of pods, ``Ingress``, HTTP routing from outside the cluster, ``ConfigMap`` and ``Secret``, configuration injection, and ``HorizontalPodAutoscaler``, automatic scaling based on CPU/memory or custom metrics.

PHP applications are deployed on Kubernetes as Docker containers, typically using PHP-FPM with nginx or Caddy as the HTTP front-end, or as FrankenPHP/Swoole workers. The Kubernetes service layer provides built-in service discovery via DNS. Kubernetes is the most common runtime for PHP microservices at scale.

``k8s`` is the numeronym for Kubernetes: 8 letters between K and s.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/kubernetes.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/kubernetes.html","name":"Kubernetes","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:23:52 +0000","dateModified":"Tue, 14 Jul 2026 05:23:52 +0000","description":"Kubernetes, nicknamed k8s, is an open-source container orchestration platform that automates the deployment, scaling, networking, and lifecycle management of containerised applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/kubernetes.html"]}],"alternateName":["k8s","kube"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/container-orchestration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service-discovery.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/load-balancer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/numeronym.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/kubernetes.io\/docs\/home\/"},{"@type":"CreativeWork","name":"How To Deploy PHP Application On Kubernetes ?","url":"https:\/\/www.geeksforgeeks.org\/devops\/how-to-deploy-php-application-on-kubernetes\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"kubernetes"}]}]}</script>
```php
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
```

**[Documentation](https://kubernetes.io/docs/home/)**
## See Also

+ [How To Deploy PHP Application On Kubernetes ?](https://www.geeksforgeeks.org/devops/how-to-deploy-php-application-on-kubernetes/)

## Related

+ [Docker](docker.html)
+ [Container Orchestration](container-orchestration.html)
+ [Microservice](microservice.html)
+ [Service Discovery](service-discovery.html)
+ [Load Balancer](load-balancer.html)
+ [Numeronym](numeronym.html)
