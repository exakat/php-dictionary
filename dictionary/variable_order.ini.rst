.. _variable_order:
.. meta::
	:description:
		variable_order: The ``variable_order`` directive sets the order in which the values are assigned to the `$_REQUEST` variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: variable_order
	:twitter:description: variable_order: The ``variable_order`` directive sets the order in which the values are assigned to the `$_REQUEST` variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: variable_order
	:og:type: article
	:og:description: The ``variable_order`` directive sets the order in which the values are assigned to the `$_REQUEST` variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable_order.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"variable_order","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The ``variable_order`` directive sets the order in which the values are assigned to the `$_REQUEST` variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/variable_order.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


variable_order
--------------

The ``variable_order`` directive sets the order in which the values are assigned to the `$_REQUEST` variable.

The default is `EGPCS` : Environment, GET, POST, COOKIE and SESSION. The values are overwritten by the next, so if GET and POST have both an `x` variable, the default configuration will only keep the one from POST, as it is later in the configuration. 

The default configuration ensures that safer values, such as the session's value, are not overwritten by less safe values from GET or POST, for example.



.. code-block:: php
   
   <?php
   
   // variable_order = EGPCS
   // https://www.example.com/index.php?x=1
   // POST x = 2;
   $_REQUEST['x'] === '2';
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.variables-order>`__

Related : :ref:`$_REQUEST <$_request>`
