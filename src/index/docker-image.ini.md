# Docker Image
A Docker image is a read-only template used to create Docker containers. It bundles the application code, runtime, libraries, environment variables, and configuration files needed to run an application.

Images are built from a ``Dockerfile`` and are composed of stacked, immutable layers. Each instruction in the ``Dockerfile`` adds a new layer; unchanged layers are cached and reused to speed up builds.

Official PHP images are available on Docker Hub in several variants: ``cli``, ``fpm``, ``apache``, and ``zts``, each based on Debian or Alpine Linux.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/docker-image.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/docker-image.ini.html","name":"Docker Image","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A Docker image is a read-only template used to create Docker containers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Docker Image.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-an-image/)**
## See Also

+ [Official PHP Docker images](https://hub.docker.com/_/php)
+ [Create a Docker image for PHP](https://codefresh.io/docs/docs/example-catalog/ci-examples/php/)

## Related

+ [Docker](docker.ini.html)
+ [Docker Container](docker-container.ini.html)
+ [PHP Docker Container](php-docker-container.ini.html)
+ [Container](container.ini.html)
+ [Registry](registry.ini.html)
+ [Image](image.ini.html)
