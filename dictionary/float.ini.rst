.. _float:
.. _double:
.. meta::
	:description:
		Floating Point Numbers:  Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Floating Point Numbers
	:twitter:description: Floating Point Numbers:  Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Floating Point Numbers
	:og:type: article
	:og:description:  Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/float.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Floating Point Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":" Floating point numbers (also known as \"floats\", \"doubles\", or \"real numbers\") can be specified using a decimal dot and a mantis","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Floating Point Numbers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Floating Point Numbers
----------------------

 Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``.

Floats used be called ``real``, though this was abandoned progressively, since PHP 7.0.

.. code-block:: php
   
   
   <?php
   $a = 1.234; 
   $b = 1.2e3; 
   $c = 7E-10;
   $d = 1_234.567; // as of PHP 7.4.0
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.float.php>`__

See also `Floating Dangers in PHP <https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc>`_, `Floating Point Math <https://0.30000000000000004.com/>`_, `Comparing float value in PHP <https://www.geeksforgeeks.org/comparing-float-value-in-php/>`_

Related : :ref:`Real Numbers <real>`, :ref:`Addition <addition>`, :ref:`Multiplication <multiplication>`
