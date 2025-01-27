.. _negative-index:
.. meta::
	:description:
		negative-index: On PHP strings, a positive index starts at zero at the beginning of the string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: negative-index
	:twitter:description: negative-index: On PHP strings, a positive index starts at zero at the beginning of the string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: negative-index
	:og:type: article
	:og:description: On PHP strings, a positive index starts at zero at the beginning of the string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/negative-index.ini.html
	:og:locale: en


negative-index
--------------

On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string. 

Negative index was added in PHP 7.1.

On an array, negative index are supported, without any special meaning: they are only available when provided. Their behavior changed when using automatic indexing though.

.. code-block:: php
   
   <?php
   
   $string = 'abcd';
   
   echo $string[1]; // b
   echo $string[-1]; // c
   
   ?>


Related : :ref:`Index For Arrays <index-array>`, :ref:`String <string>`
