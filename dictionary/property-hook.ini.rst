.. _property-hook:
.. _hook:
.. meta::
	:description:
		Property Hook: Property hooks are a feature of PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property Hook
	:twitter:description: Property Hook: Property hooks are a feature of PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Property Hook
	:og:type: article
	:og:description: Property hooks are a feature of PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/property-hook.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Property Hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Jun 2025 20:13:27 +0000","dateModified":"Wed, 25 Jun 2025 20:13:27 +0000","description":"Property hooks are a feature of PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Property Hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Property Hook
-------------

Property hooks are a feature of PHP 8.4, where accessors can be defined with the property. 

Hooks are for 'set' and 'get': they allow extra commands to be always executed at setting or getting time of a property. 

Hooks look like the magic methods ``__set`` and ``__get``, with a few differences: they are dedicated to a property, and easier to write. 


.. code-block:: php
   
   <?php
   
   class X
   {
       public string $property {
       	// this is the single line definition of a hook
       	// the expression is the returned value
           get => $this->property . _1;
   
           set {
           	// $value is the unique parameter of that function
               $this->property = $value;
           }
       }
   }
   ?>


See also `PHP 8.4 Property Hooks <https://ashallendesign.co.uk/blog/php-84-property-hooks>`_, `PHP 8.4 Property Hooks: The Ultimate Guide for Developers <https://qirolab.com/posts/php-84-property-hooks>`_, `PHP RFC: Property hook improvements <https://wiki.php.net/rfc/hook_improvements>`_

Related : :ref:`Properties <property>`, :ref:`__get() Method <-__get>`, :ref:`__set() Method <-__set>`, :ref:`Magic Methods <magic-method>`
