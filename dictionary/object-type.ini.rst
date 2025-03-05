.. _object-type:
.. meta::
	:description:
		Object Type: ``object`` is a PHP type, which represents an object of any class, including anonymous classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Type
	:twitter:description: Object Type: ``object`` is a PHP type, which represents an object of any class, including anonymous classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Type
	:og:type: article
	:og:description: ``object`` is a PHP type, which represents an object of any class, including anonymous classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Object Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"``object`` is a PHP type, which represents an object of any class, including anonymous classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Type
-----------

``object`` is a PHP type, which represents an object of any class, including anonymous classes. 

``object`` may be used with properties, arguments and returntype, but not with ``instanceof``.


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

See also `TYPE HINT ALL THE THINGS! <https://thecodingmachine.io/type-hint-all-the-things>`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`Clone <clone>`, :ref:`Type System <type>`, :ref:`instanceof <instanceof>`
