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
