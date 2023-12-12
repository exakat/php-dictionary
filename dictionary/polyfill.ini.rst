.. _polyfill:

Polyfill
--------

A polyfill is a piece of code that provides modern functionality on older browsers or environments that lack support for certain features. Polyfills are used to bridge the gap between the capabilities of modern web standards and the limitations of older browsers that might not fully support those standards.

The term "polyfill" is a combination of "poly" (meaning many) and "fill" (meaning to provide what's missing). Essentially, a polyfill "fills in" the missing functionality by replicating the behavior of the modern feature using JavaScript or other technologies, allowing developers to write code using modern APIs and standards without worrying about compatibility with older browsers.

There are polyfills for PHP version, for specific extensions (in case they are not compiled with PHP) or component versions.

There are polyfills available in packagist, like the family of packages ``symfony/polyfill-*``, or manually coded in the sources. 


.. code-block:: php
   
   <?php
   
   // hand-made polyfill
   if (!function_exists('str_contains')) {
   	function str_contains(string $a, string $b) : bool {
   		return substr($a, $b) !== false;
   	}
   }
   
   ?>


`Documentation <https://github.com/symfony/polyfill>`__

Related packages : `symfony/polyfill-php83 <https://packagist.org/packages/symfony/polyfill-php83>`_, `paragonie/random_compat <https://packagist.org/packages/paragonie/random_compat>`_, `guzzlehttp/uri-template <https://packagist.org/packages/guzzlehttp/uri-template>`_
