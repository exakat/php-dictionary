# Docker Image
A Docker image is a read-only template used to create Docker containers. It bundles the application code, runtime, libraries, environment variables, and configuration files needed to run an application.

Images are built from a ``Dockerfile`` and are composed of stacked, immutable layers. Each instruction in the ``Dockerfile`` adds a new layer; unchanged layers are cached and reused to speed up builds.

Official PHP images are available on Docker Hub in several variants: ``cli``, ``fpm``, ``apache``, and ``zts``, each based on Debian or Alpine Linux.
## See Also

+ [Official PHP Docker images](https://hub.docker.com/_/php)
+ [Create a Docker image for PHP](https://codefresh.io/docs/docs/example-catalog/ci-examples/php/)

Related : [Docker](Docker), [Docker Container](Docker Container), [PHP Docker Container](PHP Docker Container), [Container](Container), [Registry](Registry), [Image](Image)
