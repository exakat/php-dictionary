.. _dot-file:
.. meta::
	:description:
		. File: The ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: . File
	:twitter:description: . File: The ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: . File
	:og:type: article
	:og:description: The ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dot-file.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dot-file.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dot-file.ini.html","name":". File","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:30 +0000","dateModified":"Fri, 19 Jun 2026 21:24:30 +0000","description":"The ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/. File.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


. File
------

The ``.`` files are files whose name start with a dot. By convention, they are considered hidden files, and are not listed when scanning a directory. Otherwise, they may be files or directories: ``.env``, ``.ssh``, ``.git``, etc.

.. code-block:: php
   
   <?php
   
       // files
       $files = glob('./*');
   
       // hidden files
       $files = glob('./.*');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Hidden_file_and_hidden_directory>`__

Related : :ref:`Path <path>`, :ref:`\. Directory <dot-directory>`, :ref:`Dot-dot Directory \.\. <dot-dot-directory>`
