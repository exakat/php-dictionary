.. _directive:
.. meta::
	:description:
		Directives: Directives are the configuration option of PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Directives
	:twitter:description: Directives: Directives are the configuration option of PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Directives
	:og:type: article
	:og:description: Directives are the configuration option of PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/directive.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/directive.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/directive.ini.html","name":"Directives","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Directives are the configuration option of PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Directives.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Directives
----------

Directives are the configuration option of PHP. They may be set in the ``php.ini`` file, in HTTP server files like ``.htaccess``, or accessed via the ``ini_get()`` and ``ini_set()`` native calls. 

Directives are also set by PHP extensions or by PHP applications.

.. code-block:: php
   
   <?php
   
       echo 'display_errors = ' . ini_get('display_errors') . "\n";
       echo 'register_globals = ' . ini_get('register_globals') . "\n";
       echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
       echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
       echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.list.php>`__

Related : :ref:`Extensions <extension>`, :ref:`php\.ini <php.ini>`, :ref:`\.htaccess <htaccess>`, :ref:`Configuration <configuration>`, :ref:`Enable <enable>`, :ref:`Flag <flag>`, :ref:`ini_set() <ini_set>`, :ref:`html_errors <html_errors>`, :ref:`max_execution_time <max_execution_time>`, :ref:`Register Globals <register-globals>`, :ref:`register_argc_argv <register_argc_argv>`, :ref:`serialize_precision <serialize_precision>`
