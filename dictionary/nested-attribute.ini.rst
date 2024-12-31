.. _nested-attribute:
.. meta::
	:description:
		Nested Attributes: Arguments of attributes may be literals, such as integer or strings: they can also be other objects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nested Attributes
	:twitter:description: Nested Attributes: Arguments of attributes may be literals, such as integer or strings: they can also be other objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nested Attributes
	:og:type: article
	:og:description: Arguments of attributes may be literals, such as integer or strings: they can also be other objects
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nested-attribute.ini.html
	:og:locale: en


Nested Attributes
-----------------

Arguments of attributes may be literals, such as integer or strings: they can also be other objects. 

This feature was introduced in PHP 8.1. The objects must be created with a new expression, with their respective argument position or name. The created object is not necessarily an attribute itself, and they may also be created with another new expression.

.. code-block:: php
   
   <?php
   
   #[
       MyAttribute(
           new OptionA('a'),
           new OptionB(new OptionC(), 3)
       )
   ]
   function headers() : never {
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/new_in_initializers>`__

Added in PHP 8.1+
