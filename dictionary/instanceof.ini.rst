.. _instanceof:
.. meta::
	:description:
		instanceof: `instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: instanceof
	:twitter:description: instanceof: `instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: instanceof
	:og:type: article
	:og:description: `instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/instanceof.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"instanceof","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"`instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/instanceof.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


instanceof
----------

`instanceof` is used to determine whether a PHP variable is an instantiated object of a certain class. It is related to the function is_a().

`instanceof` has a higher precedence than `!` operator, so it is applied before the latter.  In case of confusion, use parenthesis.

.. code-block:: php
   
   <?php
   
   if ($user instanceof Administrator) {
       $user->admin();
   }
   
   // If The user is not of class User...
   if ( !$user instanceof User ) {
   //if ( !($user instanceof User) ) {
       $user->admin();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.type.php#language.operators.type>`__
