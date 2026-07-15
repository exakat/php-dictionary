.. _auto_prepend_file:
.. meta::
	:description:
		Preappend File Directive: The ``auto_prepend_file`` PHP directive adds an ``require`` call before the main file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Preappend File Directive
	:twitter:description: Preappend File Directive: The ``auto_prepend_file`` PHP directive adds an ``require`` call before the main file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Preappend File Directive
	:og:type: article
	:og:description: The ``auto_prepend_file`` PHP directive adds an ``require`` call before the main file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/auto_prepend_file.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/auto_prepend_file.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/auto_prepend_file.ini.html","name":"Preappend File Directive","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The ``auto_prepend_file`` PHP directive adds an ``require`` call before the main file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Preappend File Directive.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Preappend File Directive
------------------------

The ``auto_prepend_file`` PHP directive adds an ``require`` call before the main file. The file is then automatically executed, and all its definitions are added. They are then available later in the execution.

Only one file is prepended: if several files needs to be, they should be included in a centralized file.

`Documentation <https://www.php.net/manual/en/ini.core.php#ini.auto-prepend-file>`__

See also `How to Use auto_prepend_file in PHP Effectively <https://medium.com/serveravatar/how-to-use-auto-prepend-file-in-php-effectively-ee3917b668f6>`_ and `Mastering PHP's auto_prepend_file: A Comprehensive Guide <https://kitemetric.com/blogs/mastering-php-s-auto-prepend-file-a-comprehensive-guide>`_.

Related : :ref:`Disable Functions <disable-functions>`, :ref:`Disable Classes <disable-classes>`
