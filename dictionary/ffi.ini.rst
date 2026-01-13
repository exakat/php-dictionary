.. _ffi:
.. meta::
	:description:
		Foreign Function Interface (FFI): ``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Foreign Function Interface (FFI)
	:twitter:description: Foreign Function Interface (FFI): ``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Foreign Function Interface (FFI)
	:og:type: article
	:og:description: ``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ffi.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Foreign Function Interface (FFI)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Foreign Function Interface (FFI).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Foreign Function Interface (FFI)
--------------------------------

``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.DLL`` or ``.so``, and access directly their function without writing a PHP extension.

.. code-block:: php
   
   <?php
   // Extracted from the PHP manual
   
   // create FFI object, loading libc and exporting function printf()
   $ffi = FFI::cdef(
       "int printf(const char *format, ...);", // this is a regular C declaration
       "libc.so.6");
   // call C's printf()
   $ffi->printf("Hello %s!\n", "world");
   ?>


`Documentation <https://www.php.net/manual/en/book.ffi.php#book.ffi>`__

See also `Blazingly Fast Markdown Parsing in PHP using FFI and Rust <https://ryangjchandler.co.uk/posts/blazingly-fast-markdown-parsing-in-php-using-ffi-and-rust>`_, `PHPun with FFI: Getting Rust-ic <https://platform.sh/blog/php-fun-with-ffi-getting-rust-ic/>`_
