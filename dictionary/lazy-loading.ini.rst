.. _lazy-loading:
.. meta::
	:description:
		Lazy Loading: Lazy loading is a programming pattern that postpone the actual loading of a resource to the moment it is actually used.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lazy Loading
	:twitter:description: Lazy Loading: Lazy loading is a programming pattern that postpone the actual loading of a resource to the moment it is actually used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lazy Loading
	:og:type: article
	:og:description: Lazy loading is a programming pattern that postpone the actual loading of a resource to the moment it is actually used
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lazy-loading.ini.html
	:og:locale: en


Lazy Loading
------------

Lazy loading is a programming pattern that postpone the actual loading of a resource to the moment it is actually used. 

This prevents the application from loading resources that may not be used later : it improves efficiency. 

Lazy loading happens with data and source code. Some entities may be loaded only when they are actually needed, to avoid loading too much data from the repositories, while they are not used. 

PHP also uses lazy loading: some structures are checked at linting time, when they are available. Otherwise, their validation is deferred to execution. For example, method signature compatibility with parents, or class constant values. 


.. code-block:: php
   
   
   <?php
   
   class File {
   	private $path;
   	private $content = null;
   
   	function __construct($path) {
   		$this->path = $path;
   	}
   
   	function get() {
   		if ($this->content === null) {
   			$this->content = file_get_contents($path);
   		}
   		
   		return $this->content;
   	}
   }
   
   $file = new File($path);
   // some more code
   echo $file->getContent();
   
   class ErroneousConstant {
   	const VALID = 1;
   	// invalid value for the INVALID constant
   	const INVALID = [] + 1;
   }
   
   // displays 1
   echo ErroneousConstant::VALID;
   // This produces a Fatal error, even though it could be detected before. 
   echo ErroneousConstant::INVALID;
   
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Lazy_loading>`__

See also `Revisiting Lazy-Loading Proxies in PHP <https://nicolas-grekas.medium.com/revisiting-lazy-loading-proxies-in-php-ef813eabeb67>`_, `Lazy loading design pattern in PHP <https://docs.php.earth/php/ref/oop/design-patterns/lazy-loading/>`_

Related : :ref:`Lazy Objects <lazy-objects>`

Related packages : `ocramius/proxy-manager <https://packagist.org/packages/ocramius/proxy-manager>`_
