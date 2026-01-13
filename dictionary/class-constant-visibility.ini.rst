.. _class-constant-visibility:
.. meta::
	:description:
		Class Constants Visibility: Class constant may have a visibility option.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Constants Visibility
	:twitter:description: Class Constants Visibility: Class constant may have a visibility option
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Constants Visibility
	:og:type: article
	:og:description: Class constant may have a visibility option
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant-visibility.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Class Constants Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Class constant may have a visibility option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Constants Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Constants Visibility
--------------------------

Class constant may have a visibility option. This limits their accessibility to the current class, its class hierarchy or any other class. Visibilities for class constants are : private, protected and public. 

.. code-block:: php
   
   <?php
   
   class x {
   	// This class can only be used in x
       private const C1 = 1;
   
   	// This class can only be used in x and y
       protected const C2 = 1;
   
   	// This class can be used in x, y and z
       private const C3 = 1;
   }
   
   class y extends x {
   	// doSomething()
   }
   
   class z {
   	// doSomething()
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php#language.oop5.visiblity-constants>`__

Related : :ref:`Visibility <visibility>`

Added in PHP 7.1
