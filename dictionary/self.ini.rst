.. _self:
.. meta::
	:description:
		Self: ``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Self
	:twitter:description: Self: ``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Self
	:og:type: article
	:og:description: ``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/self.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Recursion detected.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Recursion detected.html","name":"Self","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Self.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Self
----

``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current written class.

``self`` is traditionally written lower-case, although it is case-insensitive. ``self`` is a PHP keyword.

.. code-block:: php
   
   <?php
   
   class X {
       private const X = 1;
       
       function foo() {
           // same as \X::C;
           return self::C;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

See also https://phppot.com/php/php-self-vs-this/, https://www.studytonight.com/php/php-this-keyword

Related : :ref:`static <static>`, :ref:`parent <parent>`, :ref:`Keyword <keyword>`, :ref:`Late Static Binding <late-static-binding>`
