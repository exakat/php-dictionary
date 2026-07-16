.. _metadata:
.. meta::
	:description:
		Metadata: Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Metadata
	:twitter:description: Metadata: Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Metadata
	:og:type: article
	:og:description: Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/metadata.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/metadata.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/metadata.ini.html","name":"Metadata","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:39:58 +0000","dateModified":"Thu, 16 Jul 2026 04:39:58 +0000","description":"Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Metadata.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Metadata
--------

Metadata is data that describes other data: it does not carry the actual content, but information about its structure, origin, or meaning.

Metadata takes several forms:

+ Attributes, since PHP 8.0, allow attaching structured metadata to classes, methods, properties, and functions, readable at runtime through Reflection, and used by frameworks for routing, serialization, validation, or dependency injection
+ Docblocks, PHPDoc comments, provide informal metadata such as ``@param``, ``@return``, or ``@deprecated``, consumed by IDEs, static analysis tools, and documentation generators, though not by the PHP engine itself
+ Reflection exposes structural metadata about classes, methods, and parameters at runtime, such as visibility, type declarations, and attributes
+ File metadata, such as timestamps, permissions, or EXIF data embedded in images, describes properties of a file rather than a class or function

Metadata is central to many cross-cutting concerns: ``ORM`` use it to map classes to database tables, serializers use it to control field visibility, and routers use it to bind URLs to controllers.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/language.attributes.php>`__

See also `PHP Attributes overview <https://www.php.net/manual/en/language.attributes.overview.php>`_.

Related : , :ref:`Reflection <reflection>`, :ref:`Docblock <docblock>`, :ref:`Annotations <annotation>`, :ref:`EXIF (Exchangeable Image File Format) <exif>`, :ref:`Serialization <serialization>`, :ref:`Object Relational Mapping (ORM) <orm>`
