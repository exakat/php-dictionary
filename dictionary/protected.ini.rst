.. _protected:
.. meta::
	:description:
		Protected Visibility: The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Protected Visibility
	:twitter:description: Protected Visibility: The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Protected Visibility
	:og:type: article
	:og:description: The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/protected.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Protected Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 21 Jan 2025 08:40:17 +0000","dateModified":"Tue, 21 Jan 2025 08:40:17 +0000","description":"The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Protected Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Protected Visibility
--------------------

The ``protected`` keyword is part of the three keywords to define visibility of a method, property or constant. It is the middle level of visibility : it restricts usage to the current class, its parents and children.

.. code-block:: php
   
   <?php
   
   class W {
       public function methodY() { 
           // dependency on the child class
           echo self::X;
       }
   }
   
   class X extends W {
       protected const X = 1;
       
       public function method() { 
           echo self::X;
       }
   }
   
   class Y extends X {
       public function methodY() { 
           echo self::X;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Private Visibility <private>`, :ref:`Public Visibility <public>`, :ref:`Var <var>`
