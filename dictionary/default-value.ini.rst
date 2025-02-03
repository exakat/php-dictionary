.. _default-value:
.. meta::
	:description:
		Default Value: Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default Value
	:twitter:description: Default Value: Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Default Value
	:og:type: article
	:og:description: Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/default-value.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Default Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Default Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Default Value
-------------

Default value is the value that a parameter or a property takes when it is used for the first time, and have not been provided. 

Arguments and properties may have a default value. That way, arguments may be skipped when the method is being called, and the properties do not have to be initialized before usage.

Variable have a default value of null. Their initial assignment is considered a default value, as it replaces the `null` one. 


.. code-block:: php
   
   <?php
   
   function foo($a = 1) {
       echo $a;
   }
   
   foo('one ');
   foo();
   
   // displays one 1
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

Related : :ref:`Parameter <parameter>`, :ref:`Properties <property>`, :ref:`Default <default>`
