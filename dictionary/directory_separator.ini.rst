.. _directory_separator:
.. meta::
	:description:
		DIRECTORY_SEPARATOR: The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DIRECTORY_SEPARATOR
	:twitter:description: DIRECTORY_SEPARATOR: The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DIRECTORY_SEPARATOR
	:og:type: article
	:og:description: The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/directory_separator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"DIRECTORY_SEPARATOR","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Mar 2026 20:43:01 +0000","dateModified":"Mon, 09 Mar 2026 20:43:01 +0000","description":"The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DIRECTORY_SEPARATOR.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DIRECTORY_SEPARATOR
-------------------

The ``DIRECTORY_SEPARATOR`` constant provides the character to distinguish one directory from the next, in a path. 

``DIRECTORY_SEPARATOR`` is ``/`` most of the time. On Windows, it may be ``\``, although ``/`` is also valid at the same time, for compatibility reasons.

Using ``DIRECTORY_SEPARATOR`` to build paths or split a string into its components, means that the resulting data is valid on every underlying system.


.. code-block:: php
   
   <?php
   
       $path = 'folder' . DIRECTORY_SEPARATOR . 'subfolder' . DIRECTORY_SEPARATOR . 'file.txt';
       echo $path;
   
   ?>


`Documentation <https://www.php.net/manual/en/dir.constants.php#constant.directory-separator>`__
