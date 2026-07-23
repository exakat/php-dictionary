.. _var_dump:
.. meta::
	:description:
		var_dump(): ``var_dump()`` displays the information in a variable or any data container.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: var_dump()
	:twitter:description: var_dump(): ``var_dump()`` displays the information in a variable or any data container
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: var_dump()
	:og:type: article
	:og:description: ``var_dump()`` displays the information in a variable or any data container
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/var_dump.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/var_dump.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/var_dump.ini.html","name":"var_dump()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:01:38 +0000","dateModified":"Mon, 20 Jul 2026 17:01:38 +0000","description":"``var_dump()`` displays the information in a variable or any data container","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/var_dump().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


var_dump()
----------

``var_dump()`` displays the information in a variable or any data container. It is a debugging function.

``var_dump()`` is one of the most famous PHP function. It is often related to ``print_r()`` and ``var_export()``. 

.. code-block:: php
   
   <?php
   
       $a = true;
       var_dump($a);
       // bool(true)
   
   ?>


`Documentation <https://www.php.net/var_dump>`__

See also `PHP var_dump() Function: Explanation with Examples <https://www.slingacademy.com/article/php-var-dump-function-explanation-with-examples/>`_.

Related : :ref:`print_r() <print_r>`, :ref:`debug_backtrace() <debug_backtrace>`, :ref:`var_export() <var_export>`, :ref:`Debugger <debugger>`

Related packages : `koriym/printo <https://packagist.org/packages/koriym/printo>`_, `symfony/var-dumper <https://packagist.org/packages/symfony/var-dumper>`_, `spiral/dumper <https://packagist.org/packages/spiral/dumper>`_
