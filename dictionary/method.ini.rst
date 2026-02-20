.. _method:
.. _member-function:
.. meta::
	:description:
		Method: Methods are function dedicated to a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method
	:twitter:description: Method: Methods are function dedicated to a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Method
	:og:type: article
	:og:description: Methods are function dedicated to a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:24:58 +0000","dateModified":"Wed, 18 Feb 2026 20:24:58 +0000","description":"Methods are function dedicated to a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Method
------

Methods are function dedicated to a class. They are defined inside the body of a class, and may only be access in relation to that class : via an object, the class name or another method.

Methods are also called member functions. Indeed, they are functions, but they belong to an object, just like a member, or property. This is less used.

.. code-block:: php
   
   <?php
   
   class X {
       public function foo() {
           echo "I am foo!\n";
       }
   }
   
   $x = new Y();
   $y->foo(); // calling the foo method, defined in x,
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.basic.php#language.oop5.basic.properties-methods>`__

Related : :ref:`Class <class>`, :ref:`__call() Method <-__call>`, :ref:`Default Parameter <default-parameter>`, :ref:`Fossilized Methods <fossilized-method>`, :ref:`Functions <function>`, :ref:`Properties <property>`, :ref:`Return <return>`, :ref:`Static Method <static-method>`, :ref:`Visibility <visibility>`
