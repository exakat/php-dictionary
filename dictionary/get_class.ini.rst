.. _get_class:
.. meta::
	:description:
		get_class(): ``get_class()`` is a PHP native function, that returns the name of the class of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_class()
	:twitter:description: get_class(): ``get_class()`` is a PHP native function, that returns the name of the class of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_class()
	:og:type: article
	:og:description: ``get_class()`` is a PHP native function, that returns the name of the class of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/get_class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"get_class()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 04:29:31 +0000","dateModified":"Fri, 04 Jul 2025 04:29:31 +0000","description":"``get_class()`` is a PHP native function, that returns the name of the class of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/get_class().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


get_class()
-----------

``get_class()`` is a PHP native function, that returns the name of the class of an object.

``get_class()`` returns the full name of the class, including its namespace and original letter cases. 

``get_class()`` may be replaced by the magic method ``__CLASS__`` when operating on ``$this``. It may also be replaced with an object in other situation, such as fetching a static constant, or instanciating a new object.


.. code-block:: php
   
   <?php
   
   namespace A\b;
   
   class C {} 
   
   $c = new C;
   print get_class(); //A\b\C
   
   $d = new $c;
   print get_class(); //A\b\C
   
   ?>


`Documentation <https://www.php.net/manual/en/function.get-class.php>`__

Related : , :ref:`$this <$this>`
