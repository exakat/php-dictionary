.. _var_export:
.. meta::
	:description:
		var_export(): ``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: var_export()
	:twitter:description: var_export(): ``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: var_export()
	:og:type: article
	:og:description: ``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/var_export.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"var_export()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:55 +0000","dateModified":"Thu, 28 May 2026 06:09:55 +0000","description":"``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/var_export().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


var_export()
------------

``var_export()`` is a PHP native function that produces a representation of the passed data as PHP code.

``var_export()`` is used for cache, by storing an intermediate result for later inclusion. ``var_export()`` is also used for storing PHP data, and later accessing them in their current form: it by-pass the process of serializing/unserializing by using PHP as the serialization itself.

``var_export()`` is usually replaced by ``print_r()``, ``var_dump()`` or other adapted functions when it is immediately displayed, during development session.


.. code-block:: php
   
   <?php
   
       print var_export(1); // 1
       
       print var_export(abc); // 'abc'
       
       $a = [1, 3, 4];
       $a[] = 5;
       print var_export($a); // 
       
       class X {
           public string $p = 'yes';
       }
       
       $x = new X();
       $x->p = 'PHP rocks';
       print var_export($a); // 
   
   ?>


`Documentation <https://www.php.net/manual/en/function.debug-backtrace.php>`__

Related : :ref:`print_r() <print_r>`, :ref:`Serialization <serialization>`, :ref:`Cache <cache>`
