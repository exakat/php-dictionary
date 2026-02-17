.. _magic-constant:
.. meta::
	:description:
		Magic Constants: Constants which hold information about the current location of the code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Magic Constants
	:twitter:description: Magic Constants: Constants which hold information about the current location of the code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Magic Constants
	:og:type: article
	:og:description: Constants which hold information about the current location of the code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/magic-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Magic Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:30:37 +0000","dateModified":"Fri, 06 Feb 2026 09:30:37 +0000","description":"Constants which hold information about the current location of the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Magic Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Magic Constants
---------------

Constants which hold information about the current location of the code.

Those constants are magic, because they have a constant syntax, yet their value may change, even during the execution of the code. 

+ __LINE__	The current line number of the file.
+ __FILE__	The full path and filename of the file with symlinks resolved. If used inside an include, the name of the included file is returned.
+ __DIR__	The directory of the file. If used inside an include, the directory of the included file is returned. This is equivalent to dirname(__FILE__). This directory name does not have a trailing slash unless it is the root directory.
+ __FUNCTION__	The function name, or {closure} for anonymous functions.
+ __CLASS__	The class name. The class name includes the namespace it was declared in (e.g. Foo\Bar). When used in a trait method, __CLASS__ is the name of the class the trait is used in.
+ __TRAIT__	The trait name. The trait name includes the namespace it was declared in (e.g. Foo\Bar).
+ __METHOD__	The class method name.
+ __NAMESPACE__ The name of the current namespace.
+ __PROPERTY__ The name of the current property hook.

Those constants are case insensitive. While the common convention is to use them all in uppercase, all the following syntaxes work : ``__METHOD__``, ``__method__``, ``__meTHod__``.

.. code-block:: php
   
   <?php
   
   function foo() {
       // shows foo
       echo __FUNCTION__;
   }
   
   function goo() {
       // shows goo
       echo __FUNCTION__;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`Magic <magic>`, :ref:`Magic Property <magic-property>`, :ref:`Magic Methods <magic-method>`, :ref:`__CLASS__ <-__class__>`, :ref:`__FUNCTION__ <-__function__>`, :ref:`__METHOD__ <-__method__>`, :ref:`Property Hook <property-hook>`, :ref:`__get() Method <-__get>`, :ref:`__set() Method <-__set>`, :ref:`Special Constant <special-constant>`
