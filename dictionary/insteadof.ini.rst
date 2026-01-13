.. _insteadof:
.. _method-alias:
.. meta::
	:description:
		Insteadof: The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Insteadof
	:twitter:description: Insteadof: The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Insteadof
	:og:type: article
	:og:description: The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/insteadof.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Insteadof","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Insteadof.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Insteadof
---------

The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.

When a class uses multiple traits that have methods or properties with the same name, naming conflicts can arise. The insteadof operator helps to resolve these conflicts by specifying which trait's implementation should be used in the class.

.. code-block:: php
   
   <?php
   
   // Example from the PHP documentation
   trait A {
       public function smallTalk() {
           echo 'a';
       }
       public function bigTalk() {
           echo 'A';
       }
   }
   
   trait B {
       public function smallTalk() {
           echo 'b';
       }
       public function bigTalk() {
           echo 'B';
       }
   }
   
   class Talker {
       use A, B {
           B::smallTalk insteadof A;
           A::bigTalk insteadof B;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict>`__

See also `PHP Traits Explained <https://alexwebdevelop.com/php-traits/>`_

Related : :ref:`Use <use>`

Added in PHP 5.4+
