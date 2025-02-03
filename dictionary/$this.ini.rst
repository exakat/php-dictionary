.. _$this:
.. meta::
	:description:
		$this: $this is a variable that represents the current object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $this
	:twitter:description: $this: $this is a variable that represents the current object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $this
	:og:type: article
	:og:description: $this is a variable that represents the current object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$this.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$this","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"$this is a variable that represents the current object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$this.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$this
-----

$this is a variable that represents the current object. It is different in each object, each method. 

$this is also called a pseudo-variable. It is never explicitely set, but is available as soon as the method starts. 

$this cannot be unset, nor assigned a different value than the current object. This means it cannot be used as an argument, for example.

There is no special variable called `$that`.

.. code-block:: php
   
   <?php
   
   class x {
   	private $y = 1;
   
   	function foo() {
   		return $this->y;
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.this.php>`__

See also `PHP $this <https://www.phptutorial.net/php-oop/php-this/>`_, `The $this keyword <https://phpenthusiast.com/object-oriented-php-tutorials/the-this-key-word>`_
