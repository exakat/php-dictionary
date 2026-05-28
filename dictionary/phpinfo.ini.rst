.. _phpinfo:
.. meta::
	:description:
		phpinfo(): ``phpinfo()`` is one of the most famous PHP function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: phpinfo()
	:twitter:description: phpinfo(): ``phpinfo()`` is one of the most famous PHP function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: phpinfo()
	:og:type: article
	:og:description: ``phpinfo()`` is one of the most famous PHP function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/phpinfo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Unterminated comment starting line %d.html","name":"phpinfo()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``phpinfo()`` is one of the most famous PHP function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/phpinfo().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


phpinfo()
---------

``phpinfo()`` is one of the most famous PHP function. It outputs information about PHP's configuration and compilation, in HTML format.

.. code-block:: php
   
   <?php
   
       // Show all information, defaults to INFO_ALL
       phpinfo();
   
   ?>


`Documentation <https://www.php.net/manual/en/function.phpinfo>`__

See also `Part 1/3: Understanding phpinfo() — The Accidental Goldmine <https://medium.com/@cybersecplayground/part-1-3-understanding-phpinfo-the-accidental-goldmine-c662da63a3c7>`_ and `Pretty PHP Info: A Modern Replacement for `phpinfo()` <https://laravel-news.com/pretty-phpinfo>`_.

Related : :ref:`Leak <leak>`, :ref:`php\.ini <php.ini>`, :ref:`Compile <compilation>`

Added in PHP 4.0
