.. _magic-number:
.. meta::
	:description:
		Magic Numbers: A magic number is a number that appears in the code, and has no obvious signification.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Numbers
	:twitter:description: Magic Numbers: A magic number is a number that appears in the code, and has no obvious signification
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Magic Numbers
	:og:type: article
	:og:description: A magic number is a number that appears in the code, and has no obvious signification
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-number.ini.html
	:og:locale: en


Magic Numbers
-------------

A magic number is a number that appears in the code, and has no obvious signification. 

It is recommended to make the meaning of that number obvious. This is achieved by using constants, class or global, where the name of the constant improves readability.

Magic numbers also applies to other literal values, such as string, float, arrays. Though, they are more difficult to sort out of the code.

Magic numbers are difficult to categorize, when they are very common across different fields. For example, 0, 1, 2, 10 are very common for different tasks, and may need several disambiguations. Others, such as 60, 404, 1024, are common usage. Finally, there might be business specific numbers, such as 42.

.. code-block:: php
   
   <?php
   
   foreach($array as $id => $values) {
   	// Only displaying 10 values, but couldn't that limit be parametered?
   	if ($id > 10) {
   		break;
   	}
   	
   	print $values.PHP_EOL;
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Magic_number_(programming)>`__

See also `What are PHP Magic Numbers, and how to find and remove them <https://medium.com/@yourpropertyexpert/what-are-php-magic-numbers-and-how-to-find-and-remove-them-d47a616261cc>`_, `Replace Magic Number with Symbolic Constant <https://refactoring.guru/replace-magic-number-with-symbolic-constant>`_

Related packages : `povils/phpmnd <https://packagist.org/packages/povils/phpmnd>`_
