.. _deprecated:
.. meta::
	:description:
		Deprecated: Deprecated is a native PHP attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deprecated
	:twitter:description: Deprecated: Deprecated is a native PHP attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Deprecated
	:og:type: article
	:og:description: Deprecated is a native PHP attribute
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/deprecated.ini.html
	:og:locale: en


Deprecated
----------

Deprecated is a native PHP attribute. It marks a method, function or class constant as available, but soon to be removed. 

The Deprecated attribute accepts an argument, that is shown to help users move to an alternative.

.. code-block:: php
   
   <?php
   
   #[Deprecated]
   function foo() {}
   
   foo();
   //Deprecated: Function foo() is deprecated
   
   #[Deprecated('Use hoo instead.')]
   function goo() {}
   
   goo();
   //Deprecated: Function goo() is deprecated, Use hoo instead.
   
   ?>


`Documentation <https://wiki.php.net/rfc/deprecated_attribute>`__
