.. _named-parameter:
.. meta::
	:description:
		Named Parameters: Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named Parameters
	:twitter:description: Named Parameters: Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Named Parameters
	:og:type: article
	:og:description: Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/named-parameter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Named Parameters","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Named Parameters.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Named Parameters
----------------

Named parameters, also known as named arguments allow to pass arguments to a function or method by specifying the parameter name along with the corresponding value, rather than relying on the order of the parameters.

In traditional positional parameter passing, the values are provided to a function in the order in which the parameters are defined. However, with named parameters, the parameter to which a value is passed, is explicitly stated.

.. code-block:: php
   
   <?php
   
   function foo($a, $b) {
       return $a - $b;
   }
   
   echo foo(2, 3);  // return -1
   echo foo(3, 2);  // return 1
   
   echo foo(a: 2, b: 3);  // return -1
   echo foo(b: 2, a: 3);  // return 1
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php>`__

See also https://platform.sh/blog/2020/php-80-feature-focus-named-arguments, https://sebastiandedeyne.com/named-arguments/, https://alexwebdevelop.activehosted.com/social/758874998f5bd0c393da094e1967a72b.326/, https://darkghosthunter.medium.com/php-named-arguments-are-your-friends-8076959b2f11/, https://php.watch/articles/no-named-arguments-docblock-attribute

Related : :ref:`Positional Parameters <positional-parameter>`
