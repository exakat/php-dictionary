# Library
A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications.

Libraries are included, and then executed: yet, they do not have an entry point of their own. The calling application controls when and how the library's code is invoked. This distinguishes a library from a framework, which imposes a structure and calls the application's code instead.

Libraries cover a wide range of concerns: string manipulation, date handling, HTTP clients, cryptography, image processing, data parsing, and more. Using a well-maintained library avoids reinventing the wheel and benefits from the work and review of the wider community.

Libraries are distributed through a package manager. The most common is ``Composer`` and libraries are indexed on ``Packagist``. A library is declared as a dependency in ``composer.json`` and loaded via the Composer autoloader. Choosing a library involves evaluating its activity, test coverage, license, and compatibility with the target PHP version.

Writing a library requires extra discipline compared to application code: the public API must be stable, backward compatibility must be maintained across versions, and the library should have no opinion about the application's framework or infrastructure.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library.html","name":"Library","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:50:04 +0000","dateModified":"Sat, 11 Jul 2026 14:50:04 +0000","description":"A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Library.html"]}],"alternateName":["package"],"keywords":["concept","ecosystem"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/packagist.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/framework.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-source.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vendor-lockin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ffi.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sdk.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Library_(computing)"},{"@type":"CreativeWork","name":"Packagist","url":"https:\/\/packagist.org\/"},{"@type":"CreativeWork","name":"Composer documentation","url":"https:\/\/getcomposer.org\/doc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"library"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Library_(computing))**
## See Also

+ [Packagist](https://packagist.org/)
+ [Composer documentation](https://getcomposer.org/doc/)

## Related

+ [Composer](composer.html)
+ [Packagist](packagist.html)
+ [Framework](framework.html)
+ [Dependency](dependency.html)
+ [Class Autoloading](autoload.html)
+ [Open Source](open-source.html)
+ [Vendor Lock-in](vendor-lockin.html)
+ [Application Programming Interface (API)](api.html)
+ [Dynamic Loading](dynamic-loading.html)
+ [Foreign Function Interface (FFI)](ffi.html)
+ [Software Development Kit (SDK)](sdk.html)
