.. _swagger:
.. _openapi:
.. meta::
	:description:
		Swagger: Swagger is a toolset for designing, documenting, and consuming REST APIs.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Swagger
	:twitter:description: Swagger: Swagger is a toolset for designing, documenting, and consuming REST APIs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Swagger
	:og:type: article
	:og:description: Swagger is a toolset for designing, documenting, and consuming REST APIs
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/swagger.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Swagger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:21:11 +0000","dateModified":"Mon, 06 Jul 2026 10:21:11 +0000","description":"Swagger is a toolset for designing, documenting, and consuming REST APIs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Swagger.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Swagger
-------

Swagger is a toolset for designing, documenting, and consuming REST APIs. The underlying specification is now published as the ``OpenAPI Specification``, aka OAS, while the Swagger brand covers the surrounding ecosystem of tools.

Swagger documentation is typically generated from source code using annotations or attributes. Libraries such as ``zircote/swagger-php`` parse docblocks or PHP 8 attributes and emit a ``openapi.json`` or ``openapi.yaml`` file that conforms to the OpenAPI standard. The Swagger UI then renders that file as interactive, browser-based API documentation.

OpenAPI documents describe endpoints, request parameters, response schemas, authentication schemes, and examples. They can also drive code generation, contract testing, and mock servers.

.. code-block:: php
   
   <?php
   
       use OpenApi\Attributes as OA;
   
       #[OA\Info(title: 'My API', version: '1.0.0')]
       class ApiInfo {}
   
       class UserController
       {
           #[OA\Get(
               path: '/users/{id}',
               summary: 'Fetch a single user',
               tags: ['Users'],
               parameters: [
                   new OA\Parameter(name: 'id', in: 'path', required: true, schema: new OA\Schema(type: 'integer'))
               ],
               responses: [
                   new OA\Response(response: 200, description: 'User found'),
                   new OA\Response(response: 404, description: 'User not found'),
               ]
           )]
           public function show(int $id): JsonResponse {}
       }
   
   ?>


`Documentation <https://swagger.io/docs/>`__

See also `OpenAPI Specification <https://spec.openapis.org/oas/latest.html>`_ and `Swagger UI <https://swagger.io/tools/swagger-ui/>`_.

Related : :ref:`Application Programming Interface (API) <api>`, :ref:`REST API <rest-api>`, :ref:`Route <route>`, :ref:`Specification <specification>`

Related packages : `zircote/swagger-php <https://packagist.org/packages/zircote/swagger-php>`_
