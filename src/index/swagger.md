# Swagger
Swagger is a toolset for designing, documenting, and consuming REST APIs. The underlying specification is now published as the ``OpenAPI Specification``, aka OAS, while the Swagger brand covers the surrounding ecosystem of tools.

Swagger documentation is typically generated from source code using annotations or attributes. Libraries such as ``zircote/swagger-php`` parse docblocks or PHP 8 attributes and emit a ``openapi.json`` or ``openapi.yaml`` file that conforms to the OpenAPI standard. The Swagger UI then renders that file as interactive, browser-based API documentation.

OpenAPI documents describe endpoints, request parameters, response schemas, authentication schemes, and examples. They can also drive code generation, contract testing, and mock servers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swagger.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swagger.html","name":"Swagger","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:21:11 +0000","dateModified":"Mon, 06 Jul 2026 10:21:11 +0000","description":"Swagger is a toolset for designing, documenting, and consuming REST APIs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Swagger.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"swagger"}]}]}</script>
```php
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
```

**[Documentation](https://swagger.io/docs/)**
## See Also

+ [OpenAPI Specification](https://spec.openapis.org/oas/latest.html)
+ [Swagger UI](https://swagger.io/tools/swagger-ui/)

## Related

+ [Application Programming Interface (API)](api.html)
+ [REST API](rest-api.html)
+ [Route](route.html)
+ [Specification](specification.html)

## Related packages

+ [zircote/swagger-php](https://packagist.org/packages/zircote/swagger-php)
