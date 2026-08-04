# Swagger
Swagger is a toolset for designing, documenting, and consuming REST APIs. The underlying specification is now published as the ``OpenAPI Specification``, aka OAS, while the Swagger brand covers the surrounding ecosystem of tools.

Swagger documentation is typically generated from source code using annotations or attributes. Libraries such as ``zircote/swagger-php`` parse docblocks or PHP 8 attributes and emit a ``openapi.json`` or ``openapi.yaml`` file that conforms to the OpenAPI standard. The Swagger UI then renders that file as interactive, browser-based API documentation.

OpenAPI documents describe endpoints, request parameters, response schemas, authentication schemes, and examples. They can also drive code generation, contract testing, and mock servers.
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

## See Also

+ [OpenAPI Specification](https://spec.openapis.org/oas/latest.html)
+ [Swagger UI](https://swagger.io/tools/swagger-ui/)

Related : [Application Programming Interface (API)](Application Programming Interface (API)), [REST API](REST API), [Route](Route), [Specification](Specification)
