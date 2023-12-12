.. _keyword:

Keyword
-------

PHP has a list of keywords, which are also called reserved words. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class cosntant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion. 


.. code-block:: php
   
   <?php
   
   class myNamespace {
   	function array() {
   		return array();
   	}
   }
   
   print_r((new myNamespace)->array());
   
   ?>

