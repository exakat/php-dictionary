.. _$HTTP_RAW_POST_DATA:
.. meta::
	:description:
		$HTTP_RAW_POST_DATA: `$HTTP_RAW_POST_DATA` used to contain the raw POST data of an HTTP request.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $HTTP_RAW_POST_DATA
	:twitter:description: $HTTP_RAW_POST_DATA: `$HTTP_RAW_POST_DATA` used to contain the raw POST data of an HTTP request
	:twitter:creator: @exakat
	:og:title: $HTTP_RAW_POST_DATA
	:og:type: article
	:og:description: `$HTTP_RAW_POST_DATA` used to contain the raw POST data of an HTTP request
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$HTTP_RAW_POST_DATA.ini.html
	:og:locale: en


$HTTP_RAW_POST_DATA
-------------------

`$HTTP_RAW_POST_DATA` used to contain the raw POST data of an HTTP request. 

Since PHP 7.0, ``php://input`` should be used instead of `$HTTP_RAW_POST_DATA`.  

.. code-block:: php
   
   <?php
   
       // $a->file was filled with $_FILES at some point
       move_uploaded_file($a->file['tmp_name'], $target);
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.files.php>`__

Removed in PHP 
