.. _static:
.. meta::
	:description:
		static: The ``static`` keyword has several distinct usages.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: static
	:twitter:description: static: The ``static`` keyword has several distinct usages
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: static
	:og:type: article
	:og:description: The ``static`` keyword has several distinct usages
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"static","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Feb 2025 09:13:38 +0000","dateModified":"Tue, 11 Feb 2025 09:13:38 +0000","description":"The ``static`` keyword has several distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/static.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


static
------

The ``static`` keyword has several distinct usages.

Static is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current called class.

Static is a keyword for methods and properties : they are turned into class elements, and should be reached with the :: syntax, instead of -> or ?->.

Static is a keyword for closures and arrow functions : it prevents the current scope to be included in with the closure, thus limiting the number of accessible values.

Static is a keyword for variables : those variables aren't removed at the end of the method execution and are available at the beginning of the next call.



.. code-block:: php
   
   <?php
   
   class X {
       private const X = 1;
       
       function foo() {
           return static::1;
   
           // same as \X::C; when the object is of class X
           // same as \Y::C; when the object is of class W
       }
   }
   
   class Y extends X {
       private const X = 2;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

See also `Stop using “static” in PHP <https://blog.devgenius.io/stop-using-static-in-php-b150527819b2>`_, `5 usages of static keyword in PHP <https://www.exakat.io/en/5-usages-of-static-keyword-in-php/>`_, `Scope of Variables <https://jobtensor.com/Tutorial/PHP/en/Variables>`_

Related : :ref:`parent <parent>`, :ref:`Closure <closure>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Variables <variable>`, :ref:`Late Static Binding <late-static-binding>`, :ref:`Child Class <child-class>`, :ref:`Language Construct <language-construct>`, :ref:`Properties <property>`, :ref:`Self <self>`, :ref:`Special Types <special-typehint>`
