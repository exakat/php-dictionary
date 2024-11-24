.. _-__unserialize:

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
