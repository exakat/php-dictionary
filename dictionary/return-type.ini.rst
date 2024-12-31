.. _return-type:
.. _returntype:
.. _return-typehint:
.. _returntypehint:
.. meta::
	:description:
		Return Type: Return types are the types used for the return value of a method or function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Type
	:twitter:description: Return Type: Return types are the types used for the return value of a method or function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return Type
	:og:type: article
	:og:description: Return types are the types used for the return value of a method or function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/return-type.ini.html
	:og:locale: en


Return Type
-----------

Return types are the types used for the return value of a method or function. 

They are the same as the argument types, with a few addition : 

+ `void`, which means that no value is returned. (No usage of return, or return with no explicit value)
+ `never`, which means that the function won't return : either it will kill the application, or it will throw an exception.

Return types are ignored when the method throws an exception. 

Return type are covariant : they get more or equally precise with each new child generation.

.. code-block:: php
   
   <?php
   
   function foo() : bool {
       if (rand(0,1)) {
           return true;
       } else {
           return false;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.returning-values.php>`__

See also `Return Types In PHP <https://dev.to/karleb/return-types-in-php-3fip>`_

Related : :ref:`Type System <type>`, :ref:`Return <return>`, :ref:`Covariance <type-covariance>`
