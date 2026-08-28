# Swagger
Swagger is a toolset for designing, documenting, and consuming REST APIs. The underlying specification is now published as the ``OpenAPI Specification``, aka OAS, while the Swagger brand covers the surrounding ecosystem of tools.

Swagger documentation is typically generated from source code using annotations or attributes. Libraries such as ``zircote/swagger-php`` parse docblocks or PHP 8 attributes and emit a ``openapi.json`` or ``openapi.yaml`` file that conforms to the OpenAPI standard. The Swagger UI then renders that file as interactive, browser-based API documentation.

OpenAPI documents describe endpoints, request parameters, response schema, authentication schemes, and examples. They can also drive code generation, contract testing, and mock servers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swagger.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swagger.html","name":"Swagger","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:33:01 +0000","dateModified":"Fri, 14 Aug 2026 08:33:01 +0000","description":"Swagger is a toolset for designing, documenting, and consuming REST APIs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swagger.html"]}],"alternateName":["openapi"],"keywords":["documentation","api","tool"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rest-api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/route.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/specification.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/swagger.io\/docs\/"},{"@type":"CreativeWork","name":"OpenAPI Specification","url":"https:\/\/spec.openapis.org\/oas\/latest.html"},{"@type":"CreativeWork","name":"Swagger UI","url":"https:\/\/swagger.io\/tools\/swagger-ui\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"swagger"}]}]}</script>
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
