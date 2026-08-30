---
type: "PHP Feature"
title: "Swagger"
description: "Swagger is a toolset for designing, documenting, and consuming REST APIs."
resource: "https://swagger.io/docs/"
tags: ["documentation", "api", "tool"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Swagger

Swagger is a toolset for designing, documenting, and consuming REST APIs. The underlying specification is now published as the ``OpenAPI Specification``, aka OAS, while the Swagger brand covers the surrounding ecosystem of tools.

Swagger documentation is typically generated from source code using annotations or attributes. Libraries such as ``zircote/swagger-php`` parse docblocks or PHP 8 attributes and emit a ``openapi.json`` or ``openapi.yaml`` file that conforms to the OpenAPI standard. The Swagger UI then renders that file as interactive, browser-based API documentation.

OpenAPI documents describe endpoints, request parameters, response schema, authentication schemes, and examples. They can also drive code generation, contract testing, and mock servers.

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

## Documentation
- [https://swagger.io/docs/](https://swagger.io/docs/)

## See Also
- [OpenAPI Specification](https://spec.openapis.org/oas/latest.html)
- [Swagger UI](https://swagger.io/tools/swagger-ui/)

## Related
- [Application Programming Interface (API)](/features/api.md)
- [REST API](/features/rest-api.md)
- [Route](/features/route.md)
- [Specification](/features/specification.md)

## Details
- Packagist: [zircote/swagger-php](https://packagist.org/packages/zircote/swagger-php)

