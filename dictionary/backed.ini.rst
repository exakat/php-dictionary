.. _backed:
.. meta::
	:description:
		Backed: A backed structure has several meanings: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backed
	:twitter:description: Backed: A backed structure has several meanings: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backed
	:og:type: article
	:og:description: A backed structure has several meanings: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backed.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/backed.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/backed.ini.html","name":"Backed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:53 +0000","dateModified":"Fri, 19 Jun 2026 21:24:53 +0000","description":"A backed structure has several meanings: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Backed
------

A backed structure has several meanings: 

+ Backed enumeration: an enumeration that has an integer or string value
+ Backed property: a property with a hook, that actually stores the value in the property.

.. code-block:: php
   
   <?php
   
       enum E : int {
           case A = 1;
       }
       
       class X {
           private $p { get => $this->p;}
       }
       
   ?>


`Documentation <https://www.php.net/manual/en/language.enumerations.backed.php>`__

Related : :ref:`Backed Enum <backed-enum>`, :ref:`Backed Property <backed-property>`
