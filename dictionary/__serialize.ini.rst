.. _-__serialize:
.. meta::
	:description:
		__serialize() Method: The __serialize() magic method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __serialize() Method
	:twitter:description: __serialize() Method: The __serialize() magic method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __serialize() Method
	:og:type: article
	:og:description: The __serialize() magic method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__serialize.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__serialize() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The __serialize() magic method is called when a script tries to construct an associative array of key\/value pairs that represent the serialized form of the object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__serialize() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__serialize() Method
--------------------

The __serialize() magic method is called when a script tries to construct an associative array of key/value pairs that represent the serialized form of the object. 

If no array is returned a ``TypeError`` will be thrown. 


.. code-block:: php
   
   <?php
   	class WebPage {
   		private $html;
   		private $url;
   		
   	    public function __construct($url) {
   	        $this->url = $url;
   	    }
   
   		public function __serialize() {
   			return array('url' => $url);
   		}
   
   		public function __unserialize($arg) {
   			$this->url = $arg['url'];
   			$this->html = file_get_contents($this->url);
   		}
   
   	}
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.serialize>`__

See also `Serializing Data In PHP <https://www.phparch.com/2023/02/serializing-data-in-php/>`_

Related : :ref:`Unserialization <unserialize>`, :ref:`__unserialize() Method <-__unserialize>`, :ref:`Serialization <serialization>`, :ref:`Serialization <serialize>`, :ref:`Unserialization <unserialization>`
