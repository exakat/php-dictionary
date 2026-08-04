.. _glob:
.. meta::
	:description:
		glob(): ``glob()`` is a function that finds pathnames matching a pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: glob()
	:twitter:description: glob(): ``glob()`` is a function that finds pathnames matching a pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: glob()
	:og:type: article
	:og:description: ``glob()`` is a function that finds pathnames matching a pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/glob.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/glob.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/glob.ini.html","name":"glob()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:08:06 +0000","dateModified":"Tue, 04 Aug 2026 11:08:06 +0000","description":"``glob()`` is a function that finds pathnames matching a pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/glob().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


glob()
------

``glob()`` is a function that finds pathnames matching a pattern.

The ``glob()`` function is not related to the global keyword.

The pattern syntax follows the rules used by the shell, not regular expressions: ``*`` matches any number of characters, ``?`` matches a single character, and bracket expressions such as ``[a-z]`` match a range or set of characters. Optional flags let the caller include hidden files, sort results, or return only directories.

Because ``glob()`` reads the filesystem directly, its result depends on what is actually present on disk at the moment it is called, and it can be comparatively slow on directories with a very large number of entries. It also returns ``false`` on failure rather than throwing an exception, so callers should check the return value before iterating over it.

.. code-block:: php
   
   <?php
   
       foreach (glob("*.txt") as $filename) {
           echo "$filename size " . filesize($filename) . "\n";
       }   
   
   ?>


`Documentation <https://www.php.net/manual/en/function.glob.php>`__

Related : :ref:`global Scope <global>`, :ref:`Star * <star>`, :ref:`Wildcard <wildcard>`
