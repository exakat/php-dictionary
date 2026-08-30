---
type: "PHP Feature"
title: "Docker Image"
description: "A Docker image is a read-only template used to create Docker containers."
resource: "https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-an-image/"
tags: ["tools", "devops"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Docker Image

A Docker image is a read-only template used to create Docker containers. It bundles the application code, runtime, libraries, environment variables, and configuration files needed to run an application.

Images are built from a ``Dockerfile`` and are composed of stacked, immutable layers. Each instruction in the ``Dockerfile`` adds a new layer; unchanged layers are cached and reused to speed up builds.

Official PHP images are available on Docker Hub in several variants: ``cli``, ``fpm``, ``apache``, and ``zts``, each based on Debian or Alpine Linux.

## Documentation
- [https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-an-image/](https://docs.docker.com/get-started/docker-concepts/the-basics/what-is-an-image/)

## See Also
- [Official PHP Docker images](https://hub.docker.com/_/php)
- [Create a Docker image for PHP](https://codefresh.io/docs/docs/example-catalog/ci-examples/php/)

## Related
- [Docker](/features/docker.md)
- [Docker Container](/features/docker-container.md)
- [PHP Docker Container](/features/php-docker-container.md)
- [Container](/features/container.md)
- [Registry](/features/registry.md)
- [Image](/features/image.md)

