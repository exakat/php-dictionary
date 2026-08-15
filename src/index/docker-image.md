# Docker Image
A Docker image is a read-only template used to create Docker containers. It bundles the application code, runtime, libraries, environment variables, and configuration files needed to run an application.

Images are built from a ``Dockerfile`` and are composed of stacked, immutable layers. Each instruction in the ``Dockerfile`` adds a new layer; unchanged layers are cached and reused to speed up builds.

Official PHP images are available on Docker Hub in several variants: ``cli``, ``fpm``, ``apache``, and ``zts``, each based on Debian or Alpine Linux.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker-image.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker-image.html","name":"Docker Image","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A Docker image is a read-only template used to create Docker containers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Docker Image.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"docker-image"}]}]}</script>
**[Documentation](https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-an-image/)**
## See Also

+ [Official PHP Docker images](https://hub.docker.com/_/php)
+ [Create a Docker image for PHP](https://codefresh.io/docs/docs/example-catalog/ci-examples/php/)

## Related

+ [Docker](docker.html)
+ [Docker Container](docker-container.html)
+ [PHP Docker Container](php-docker-container.html)
+ [Container](container.html)
+ [Registry](registry.html)
+ [Image](image.html)
