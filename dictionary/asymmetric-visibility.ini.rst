.. _asymmetric-visibility:
.. _set-visibility:
.. meta::
	:description:
		Asymetric Visibility: Asymmetric visibility is a feature of PHP class properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Asymetric Visibility
	:twitter:description: Asymetric Visibility: Asymmetric visibility is a feature of PHP class properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Asymetric Visibility
	:og:type: article
	:og:description: Asymmetric visibility is a feature of PHP class properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/asymmetric-visibility.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Asymetric Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Asymmetric visibility is a feature of PHP class properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Asymetric Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Asymetric Visibility
--------------------

Asymmetric visibility is a feature of PHP class properties. They refer to the the situation where different scopes may read (get) or write (set). 

Traditionally, the visibility options (``private``, ``protected``, ``public``) constraints the access to the property, both in reading and writing. With asymmetric visibility, there may be contexts may have different rights of access.

.. code-block:: php
   
   <?php
   
   class x {
   	public private(set) string $p = 'abc';
   	
   	function setP($p) {
   		$this->p = $p;
   	}
   }
   
   $x = new x;
   echo $x->p; // abc
   $x->setP('def'); 
   echo $x->p; // def
   
   // 
   $x->p = 'ghi';
   
   ?>


See also https://developerjoy.co/blog/php-asymmetric-visibility-rfc-an-in-depth-look, https://chrastecky.dev/programming/new-in-php-8-5-asymmetric-visibility-for-static-properties

Related : :ref:`Visibility <visibility>`, :ref:`Properties <property>`
