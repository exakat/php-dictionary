.. _character:
.. meta::
	:description:
		Character: A character is a unit of information, that represents represents letters, punctation signs, ideogram, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Character
	:twitter:description: Character: A character is a unit of information, that represents represents letters, punctation signs, ideogram, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Character
	:og:type: article
	:og:description: A character is a unit of information, that represents represents letters, punctation signs, ideogram, etc
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/character.ini.html
	:og:locale: en


Character
---------

A character is a unit of information, that represents represents letters, punctation signs, ideogram, etc. 

Characters may be represented as a byte, on 8 bits, but also on longer sequences, with UTF-8 or UTF-16. By default, PHP uses 8 bits, and there are several extensions to manipulate the encodings.

In PHP, there is no dedicated type of character: a string of one element is used for that purpose. There are some special constraints related to manipulating characters inside a string: it is possible to access individual character in a string, with the array syntax, both to read or modify them. 

.. code-block:: php
   
   <?php
   
   $string = 'abc';
   
   echo $string[1]; // display b
   
   var_dump($string[1]);
   //string(1) b
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php>`__

Related : :ref:`Encoding <encoding>`, :ref:`UTF-8 <utf-8>`
