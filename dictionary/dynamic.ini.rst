.. _dynamic:
.. meta::
	:description:
		Dynamic: Dynamic is a common concept in PHP, and may be used in three distinct situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic
	:twitter:description: Dynamic: Dynamic is a common concept in PHP, and may be used in three distinct situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic
	:og:type: article
	:og:description: Dynamic is a common concept in PHP, and may be used in three distinct situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dynamic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 15:17:58 +0000","dateModified":"Fri, 27 Jun 2025 15:17:58 +0000","description":"Dynamic is a common concept in PHP, and may be used in three distinct situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic
-------

Dynamic is a common concept in PHP, and may be used in three distinct situations: 

+ dynamic call, to call a function or method whose name is in a variable
+ dynamic constant, to call a constant whose name is in a variable
+ dynamic property, to access a property whose name is in a variable
+ dynamic loading, for PHP to load an extension after the start of execution
+ dynamic variable, to access a variable whose name is in another variable.

.. code-block:: php
   
   <?php
   
   // Dynamic call of a variable
   $a = K;
   $x = 'a';
   echo $$x; // K
   
   const A = 1;
   $name = 'A';
   echo constant($name); // 1
   
   ?>


See also https://www.exakat.io/en/all-the-dynamic-syntaxes-in-php/

Related : :ref:`Dynamic Call <dynamic-call>`, :ref:`Dynamic Constant <dynamic-constant>`, :ref:`Dynamic Properties <dynamic-property>`, :ref:`Dynamic Loading <dynamic-loading>`, :ref:`Dynamic Variable <dynamic-variable>`, :ref:`Variable Variables <variable-variable>`
