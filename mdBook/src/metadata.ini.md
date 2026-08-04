# Metadata
Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning.

Metadata takes several forms:

+ Attributes, since PHP 8.0, allow attaching structured metadata to classes, methods, properties, and functions, readable at runtime through Reflection, and used by frameworks for routing, serialization, validation, or dependency injection
+ Docblocks, PHPDoc comments, provide informal metadata such as ``@param``, ``@return``, or ``@deprecated``, consumed by IDEs, static analysis tools, and documentation generators, though not by the PHP engine itself
+ Reflection exposes structural metadata about classes, methods, and parameters at runtime, such as visibility, type declarations, and attributes
+ File metadata, such as timestamps, permissions, or EXIF data embedded in images, describes properties of a file rather than a class or function

Metadata is central to many cross-cutting concerns: ``ORM`` use it to map classes to database tables, serializers use it to control field visibility, and routers use it to bind URLs to controllers.
```php
<?php

    #[Attribute]
    class Route {
        public function __construct(public string $path) {}
    }

    class UserController {
        #[Route('/users')]
        public function list(): array {
            return [];
        }
    }

    $method = new ReflectionMethod(UserController::class, 'list');
    foreach ($method->getAttributes(Route::class) as $attribute) {
        $route = $attribute->newInstance();
        echo $route->path; // /users
    }

?>
```

## See Also

+ [PHP Attributes overview](https://www.php.net/manual/en/language.attributes.overview.php)

Related : [Attribute](Attribute), [Reflection](Reflection), [Docblock](Docblock), [Annotations](Annotations), [EXIF (Exchangeable Image File Format)](EXIF (Exchangeable Image File Format)), [Serialization](Serialization), [Object Relational Mapping (ORM)](Object Relational Mapping (ORM))
