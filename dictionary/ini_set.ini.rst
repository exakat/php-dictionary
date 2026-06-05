.. _ini_set:
.. meta::
	:description:
		ini_set(): ``ini_set()`` is a PHP native function which can change PHP directive, during execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ini_set()
	:twitter:description: ini_set(): ``ini_set()`` is a PHP native function which can change PHP directive, during execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ini_set()
	:og:type: article
	:og:description: ``ini_set()`` is a PHP native function which can change PHP directive, during execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ini_set.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"ini_set()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"``ini_set()`` is a PHP native function which can change PHP directive, during execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ini_set().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ini_set()
---------

``ini_set()`` is a PHP native function which can change PHP directive, during execution. This is useful to make a specific limit different, depending on the part of the application which runs. It might also be a security problem, when directives are used to protect the system, and are lifted with this function. However, some directives cannot be changed by this function, such as ``disable_classes`` for example.

The impact of ``ini_set()`` only applies to the current request. It will be reset to its default value with the next request.

The complement to this function is ``ini_get()``, which collect the value of a directive without changing it; and ``ini_restore()``, which reset the directives to their initial value.

.. code-block:: php
   
   <?php
   
       print ini_get('memory_limit'); // for example 128M
   
       ini_set('memory_limit', '1024M'); // now, 1 Gb
   
   ?>


`Documentation <https://www.php.net/manual/en/function.ini-set.php>`__

See also `The ini_set Function <https://code.mu/en/php/manual/conf/ini_set/>`_.

Related : :ref:`php\.ini <php.ini>`, :ref:`Directives <directive>`, :ref:`max_execution_time <max_execution_time>`
