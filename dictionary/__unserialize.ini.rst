.. _-__unserialize:
.. meta::
	:description:
		__unserialize() Method: The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __unserialize() Method
	:twitter:description: __unserialize() Method: The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __unserialize() Method
	:og:type: article
	:og:description: The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__unserialize.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"__unserialize() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The __unserialize() magic method is called when a script tries to construct an object from an associative array of key\/value pairs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__unserialize() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__unserialize() Method
----------------------

The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs. 



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


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#language.oop5.magic.unserialize>`__

Related : :ref:`Unserialization <unserialize>`, :ref:`Serialization <serialize>`, :ref:`__serialize() Method <-__serialize>`
