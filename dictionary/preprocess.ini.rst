.. _preprocess:
.. _preprocessing:
.. meta::
	:description:
		Preprocessing: Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Preprocessing
	:twitter:description: Preprocessing: Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Preprocessing
	:og:type: article
	:og:description: Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/preprocess.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Preprocessing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Preprocessing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Preprocessing
-------------

Preprocessing is an optimisation technique, where a value is calculated even before the execution of a script. This is only possible with constants values, which are known before execution.

Preprocessing may save execution time, and memory. 

In terms of maintenance, it hides some implementation details in the result : one has to guess where this value is coming from.


.. code-block:: php
   
   <?php
   
   $seconds = 60;
   $minutes = 60;
   
   $hours = $seconds * $minutes;
   
   // this variable may be preprocessed, saving the calculation at execution time.
   $hours = 3600;
   
   ?>
   


`Documentation <https://www.php.net/manual/en/class.locale.php>`__
