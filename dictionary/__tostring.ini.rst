.. _-__tostring:
.. meta::
	:description:
		__toString() Method: __tostring() is a magic method : it is called when the object has to be converted into a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __toString() Method
	:twitter:description: __toString() Method: __tostring() is a magic method : it is called when the object has to be converted into a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __toString() Method
	:og:type: article
	:og:description: __tostring() is a magic method : it is called when the object has to be converted into a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__tostring.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__toString() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"__tostring() is a magic method : it is called when the object has to be converted into a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__toString() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__toString() Method
-------------------

__tostring() is a magic method : it is called when the object has to be converted into a string.

That way, it is possible to dynamically convert the object to a string and display it, or transmit it to another part of the application. 

__toString() is called when ``strict_types`` is not active. Otherwise, passing an object to a string parameter yields an error: it requires an explicit type cast.

__toString() is always called in concatenation, and string interpolation.

There is no magic method to convert an object to another type.



.. code-block:: php
   
   <?php
   
   class x {
   	private $r = 'S';
   	private $p = 1;
   	private $q = 2;
   
   	// Checks the dictionary, or return 0
   	function __toString() : string {
   	
   		// $this->r is used as is
   		// $this->p is formatted with quotes
   		// $this->q is converted to other values
   		return "$this->r '$this->p' ".($this->q ? 'A' : 'B');
   	}
   }
   
   echo new x;
   
   $y = (string) new x;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `PHP __toString <https://www.phptutorial.net/php-oop/php-__tostring/>`_

Related : :ref:`strict_types <strict_types>`, :ref:`Magic Methods <magic-method>`, :ref:`Cast Operator <cast>`
