# Metadata
Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning.

Metadata takes several forms:

+ Attributes, since PHP 8.0, allow attaching structured metadata to classes, methods, properties, and functions, readable at runtime through Reflection, and used by frameworks for routing, serialization, validation, or dependency injection
+ Docblocks, PHPDoc comments, provide informal metadata such as ``@param``, ``@return``, or ``@deprecated``, consumed by IDE, static analysis tools, and documentation generators, though not by the PHP engine itself
+ Reflection exposes structural metadata about classes, methods, and parameters at runtime, such as visibility, type declarations, and attributes
+ File metadata, such as timestamps, permissions, or EXIF data embedded in images, describes properties of a file rather than a class or function

Metadata is central to many cross-cutting concerns: ``ORM`` use it to map classes to database tables, serializers use it to control field visibility, and routers use it to bind URLs to controllers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metadata.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metadata.html","name":"Metadata","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:58:07 +0000","dateModified":"Thu, 13 Aug 2026 05:58:07 +0000","description":"Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metadata.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docblock.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/annotation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exif.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/orm.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.attributes.php"},{"@type":"CreativeWork","name":"PHP Attributes overview","url":"https:\/\/www.php.net\/manual\/en\/language.attributes.overview.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"metadata"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.attributes.php)**
## See Also

+ [PHP Attributes overview](https://www.php.net/manual/en/language.attributes.overview.php)

## Related

+ [Attribute](attribute.html)
+ [Reflection](reflection.html)
+ [Docblock](docblock.html)
+ [Annotations](annotation.html)
+ [EXIF (Exchangeable Image File Format)](exif.html)
+ [Serialization](serialization.html)
+ [Object Relational Mapping (ORM)](orm.html)
