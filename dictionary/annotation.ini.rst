.. _annotation:
.. meta::
	:description:
		Annotations: PHP annotations are a system to provide meta data about code, in a way that is programmatically processable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Annotations
	:twitter:description: Annotations: PHP annotations are a system to provide meta data about code, in a way that is programmatically processable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Annotations
	:og:type: article
	:og:description: PHP annotations are a system to provide meta data about code, in a way that is programmatically processable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/annotation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Annotations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Jun 2025 20:14:54 +0000","dateModified":"Tue, 24 Jun 2025 20:14:54 +0000","description":"PHP annotations are a system to provide meta data about code, in a way that is programmatically processable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Annotations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Annotations
-----------

PHP annotations are a system to provide meta data about code, in a way that is programmatically processable. 

PHP annotations are based on PHPDoc comment's syntax, and are later partially modernized by PHP attributes. 


.. code-block:: php
   
   
   <?php
   
   /**
    * <description of foo>
    * @param int $a : <description of the parameter>
    * @return int : <description of the returned value>
    */
   function foo(int $a) {
   	
   	// This annotation cannot be turned into an attribute
   	/**
   	 * @var int $b : <description of the variable>
   	 */
   	 $b = $a + 1;
   	 
   	 return $b;
   }
   
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/PHPDoc>`__

See also `Understanding annotations <https://php-annotations.readthedocs.io/en/latest/UsingAnnotations.html>`_, `Annotating Types via PHP Doc Comments <https://scrutinizer-ci.com/docs/tools/php/php-analyzer/guides/annotating_code>`_

Related : :ref:`Attribute <attribute>`

Related packages : `php-annotations/php-annotations <https://packagist.org/packages/php-annotations/php-annotations>`_
