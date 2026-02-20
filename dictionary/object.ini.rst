.. _object:
.. meta::
	:description:
		Object: PHP includes a complete object model.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object
	:twitter:description: Object: PHP includes a complete object model
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object
	:og:type: article
	:og:description: PHP includes a complete object model
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 19:35:19 +0000","dateModified":"Wed, 18 Feb 2026 19:35:19 +0000","description":"PHP includes a complete object model","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object
------

PHP includes a complete object model. Some of its features are: visibility, abstract and final classes and methods, additional magic methods, interfaces, and cloning.

``object`` is also a PHP type, which represent an object of any class.

.. code-block:: php
   
   <?php
   
   foreach([11,12,13] as $id => $value) {
       print "$id => $value\n";
   }
   
   for ($i = 1; $i <= 10; $i++) {
       echo $i;
   }
   
   $i = 10;
   while ($i <= 10) {
       echo $i++;  
   }
   
   $i = 10;
   do {
       echo $i++;  
   } while ($i <= 10);
   
   $a = new A;
   var_dump($a instanceof object);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.php>`__

See also https://thecodingmachine.io/type-hint-all-the-things

Related : :ref:`Visibility <visibility>`, :ref:`Abstract Keyword <abstract>`, :ref:`Final Keyword <final>`, :ref:`Magic Methods <magic-method>`, :ref:`Interface <interface>`, :ref:`Clone <clone>`, :ref:`Type System <type>`
