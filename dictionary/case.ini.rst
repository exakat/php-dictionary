.. _case:
.. meta::
	:description:
		Case: Case is a PHP keyword, which may be used in three distinct situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case
	:twitter:description: Case: Case is a PHP keyword, which may be used in three distinct situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Case
	:og:type: article
	:og:description: Case is a PHP keyword, which may be used in three distinct situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/case.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Case","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:12 +0000","dateModified":"Sun, 25 Jan 2026 20:46:12 +0000","description":"Case is a PHP keyword, which may be used in three distinct situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Case.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Case
----

Case is a PHP keyword, which may be used in three distinct situations: 

+ with switch() expression
+ with match() expression
+ with enumeration

case is often complemented with default.

.. code-block:: php
   
   <?php
   
   enum Suit
   {
       case Hearts;
       case Diamonds;
       case Clubs;
       case Spades;
   }
   
   switch ($i) {
       case 0:
           echo "i equals 0";
           break;
       case 1:
           echo "i equals 1";
           break;
       case 2:
           echo "i equals 2";
           break;
   }
   
   ?>


Related : :ref:`Default <default>`, :ref:`Match <match>`, :ref:`Enumeration (enum) <enum>`, :ref:`Enumeration Case <enum-case>`, :ref:`Switch <switch>`, :ref:`Switch Case <switch-case>`
