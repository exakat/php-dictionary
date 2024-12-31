.. _function-subscripting:
.. _subscripting:
.. meta::
	:description:
		Function Subscripting: Function subscripting is the ability to apply operators like ->, .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function Subscripting
	:twitter:description: Function Subscripting: Function subscripting is the ability to apply operators like ->, 
	:twitter:creator: @exakat
	:og:title: Function Subscripting
	:og:type: article
	:og:description: Function subscripting is the ability to apply operators like ->, 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/function-subscripting.ini.html
	:og:locale: en


Function Subscripting
---------------------

Function subscripting is the ability to apply operators like ->, ?-> or [<index>] directly on the results of a method call. 

.. code-block:: php
   
   <?php
   
   // displays the third element of the response of 'callMethod', on object 'getObject';
   echo getObject()->callMethod()[3];
   ?>


`Documentation <https://www.php.net/manual/en/functions.user-defined.php>`__

Related : :ref:`Dereferencing <dereferencing>`
