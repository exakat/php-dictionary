.. _constant-in-trait:
.. meta::
	:description:
		Constants In Trait: Constants were added to trait in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants In Trait
	:twitter:description: Constants In Trait: Constants were added to trait in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants In Trait
	:og:type: article
	:og:description: Constants were added to trait in version 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-in-trait.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/constant-in-trait.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/constant-in-trait.ini.html","name":"Constants In Trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:35 +0000","dateModified":"Fri, 19 Jun 2026 21:26:35 +0000","description":"Constants were added to trait in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constants In Trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constants In Trait
------------------

Constants were added to trait in version 8.3. Before that, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own constants, but higher precedence than the host parent's constants.

It is not possible to call a trait constant directly via its trait's name: this has to be done via the host class.

.. code-block:: php
   
   <?php
   
       trait T {
           private const A = 1;
       }
       
       class X {
           use T;
       }
       
       echo A::T;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.traits.php>`__

Related : :ref:`Trait <trait>`, :ref:`Static Constant <class-constant>`
