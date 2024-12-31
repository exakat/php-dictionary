.. _-__unserialize:
.. meta::
	:description:
		__unserialize() method: The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __unserialize() method
	:twitter:description: __unserialize() method: The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __unserialize() method
	:og:type: article
	:og:description: The __unserialize() magic method is called when a script tries to construct an object from an associative array of key/value pairs
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__unserialize.ini.html
	:og:locale: en


__unserialize() method
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

Related : :ref:`Unserialization <unserialize>`, :ref:`Serialization <serialize>`, :ref:`__serialize() method <-__serialize>`
