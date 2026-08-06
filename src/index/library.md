# Library
A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications.

Libraries are included, and then executed: yet, they do not have an entry point of their own. The calling application controls when and how the library's code is invoked. This distinguishes a library from a framework, which imposes a structure and calls the application's code instead.

Libraries cover a wide range of concerns: string manipulation, date handling, HTTP clients, cryptography, image processing, data parsing, and more. Using a well-maintained library avoids reinventing the wheel and benefits from the work and review of the wider community.

Libraries are distributed through a package manager. The most common is ``Composer`` and libraries are indexed on ``Packagist``. A library is declared as a dependency in ``composer.json`` and loaded via the Composer autoloader. Choosing a library involves evaluating its activity, test coverage, license, and compatibility with the target PHP version.

Writing a library requires extra discipline compared to application code: the public API must be stable, backward compatibility must be maintained across versions, and the library should have no opinion about the application's framework or infrastructure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/library.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/library.html","name":"Library","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:50:04 +0000","dateModified":"Sat, 11 Jul 2026 14:50:04 +0000","description":"A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Library.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Library_(computing))**
## See Also

+ [Packagist](https://packagist.org/)
+ [Composer documentation](https://getcomposer.org/doc/)

## Related

+ [Composer](composer.ini.html)
+ [Packagist](packagist.ini.html)
+ [Framework](framework.ini.html)
+ [Dependency](dependency.ini.html)
+ [Class Autoloading](autoload.ini.html)
+ [Open Source](open-source.ini.html)
+ [Vendor Lock-in](vendor-lockin.ini.html)
+ [Application Programming Interface (API)](api.ini.html)
+ [Dynamic Loading](dynamic-loading.ini.html)
+ [Foreign Function Interface (FFI)](ffi.ini.html)
+ [Software Development Kit (SDK)](sdk.ini.html)
