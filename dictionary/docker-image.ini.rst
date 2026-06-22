.. _docker-image:
.. meta::
	:description:
		Docker Image: A Docker image is a read-only template used to create Docker containers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Docker Image
	:twitter:description: Docker Image: A Docker image is a read-only template used to create Docker containers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Docker Image
	:og:type: article
	:og:description: A Docker image is a read-only template used to create Docker containers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/docker-image.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Docker Image","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A Docker image is a read-only template used to create Docker containers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Docker Image.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Docker Image
------------

A Docker image is a read-only template used to create Docker containers. It bundles the application code, runtime, libraries, environment variables, and configuration files needed to run an application.

Images are built from a ``Dockerfile`` and are composed of stacked, immutable layers. Each instruction in the ``Dockerfile`` adds a new layer; unchanged layers are cached and reused to speed up builds.

Official PHP images are available on Docker Hub in several variants: ``cli``, ``fpm``, ``apache``, and ``zts``, each based on Debian or Alpine Linux.

`Documentation <https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-an-image/>`__

See also `Official PHP Docker images <https://hub.docker.com/_/php>`_ and `Create a Docker image for PHP <https://codefresh.io/docs/docs/example-catalog/ci-examples/php/>`_.

Related : :ref:`Docker <docker>`, :ref:`Docker Container <docker-container>`, :ref:`PHP Docker Container <php-docker-container>`, :ref:`Container <container>`, :ref:`Registry <registry>`, :ref:`Image <image>`
