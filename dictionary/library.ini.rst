.. _library:
.. _package:
.. meta::
	:description:
		Library: A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Library
	:twitter:description: Library: A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Library
	:og:type: article
	:og:description: A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/library.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Library","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:50 +0000","dateModified":"Fri, 19 Jun 2026 21:24:50 +0000","description":"A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Library.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Library
-------

A library is a collection of reusable code, functions, classes, or constants, that provides specific functionality and can be included in different applications.

Libraries are included, and then executed: yet, they do not have an entry point of their own. The calling application controls when and how the library's code is invoked. This distinguishes a library from a framework, which imposes a structure and calls the application's code instead.

Libraries cover a wide range of concerns: string manipulation, date handling, HTTP clients, cryptography, image processing, data parsing, and more. Using a well-maintained library avoids reinventing the wheel and benefits from the work and review of the wider community.

In PHP, libraries are distributed through ``Composer`` and indexed on ``Packagist``. A library is declared as a dependency in ``composer.json`` and loaded via the Composer autoloader. Choosing a library involves evaluating its activity, test coverage, license, and compatibility with the target PHP version.

Writing a library requires extra discipline compared to application code: the public API must be stable, backward compatibility must be maintained across versions, and the library should have no opinion about the application's framework or infrastructure.

`Documentation <https://en.wikipedia.org/wiki/Library_(computing)>`__

See also `Packagist <https://packagist.org/>`_ and `Composer documentation <https://getcomposer.org/doc/>`_.

Related : :ref:`Composer <composer>`, :ref:`Packagist <packagist>`, :ref:`Framework <framework>`, :ref:`Dependency <dependency>`, :ref:`Class Autoloading <autoload>`, :ref:`Open Source <open-source>`, :ref:`Vendor Lock-in <vendor-lockin>`, :ref:`Application Programming Interface (API) <api>`, :ref:`Dynamic Loading <dynamic-loading>`, :ref:`Foreign Function Interface (FFI) <ffi>`, :ref:`Software Development Kit (SDK) <sdk>`
