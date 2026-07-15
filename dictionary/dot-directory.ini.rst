.. _dot-directory:
.. meta::
	:description:
		. Directory: The ``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: . Directory
	:twitter:description: . Directory: The ``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: . Directory
	:og:type: article
	:og:description: The ``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dot-directory.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dot-directory.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dot-directory.ini.html","name":". Directory","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:28 +0000","dateModified":"Fri, 19 Jun 2026 21:24:28 +0000","description":"The ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/. Directory.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


. Directory
-----------

The ``.`` directory represents the current directory. It is useful to designate the current directory, and apply an operation on all the files in that directory. It is also used in ``php.ini`` directives, to that a path at the current directory.

.. code-block:: php
   
   <?php
   
       // lists of the files in the current directory
       $files = glob('./*.php');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Directory_(computing)>`__

See also `Dot and dot-dot directories <https://www.qnx.com/developers/docs/8.0/com.qnx.doc.neutrino.user_guide/topic/files_Dot.html>`_.

Related : :ref:`Path <path>`, :ref:`Concatenation \. <dot>`, :ref:`Dot-dot Directory \.\. <dot-dot-directory>`, :ref:`\. File <dot-file>`
