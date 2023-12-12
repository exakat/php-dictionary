.. _-__serialize:

__serialize() method
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

Related : :ref:`Unserialization <unserialize>`, :ref:`__unserialize() method <-__unserialize>`
