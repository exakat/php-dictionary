.. _wither:
.. meta::
	:description:
		Class Wither Method: With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Wither Method
	:twitter:description: Class Wither Method: With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Wither Method
	:og:type: article
	:og:description: With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wither.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Class Wither Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 15:17:07 +0000","dateModified":"Sat, 28 Jun 2025 15:17:07 +0000","description":"With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Wither Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Wither Method
-------------------

With is a prefix, that tells the reader that the getter returns a copy of the object, and not the object itself.  


.. code-block:: php
   
   <?php
   
   class x {
       private A $property;
       
       // getter
       public function getProperty() : A {
           return $this->property;
       }
   
       // wither
       public function withProperty() : A{
           return clone $this->property;
       }
   }
   
   ?>


`Documentation <https://projectlombok.org/features/With>`__

See also `RFC: Accessors <https://wiki.php.net/rfc/property_accessors>`_

Related : :ref:`Class <class>`, :ref:`Class Setter Method <setter>`, :ref:`Class Getter Method <getter>`, :ref:`Immutable <immutable>`
