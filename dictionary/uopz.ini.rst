.. _uopz:
.. meta::
	:description:
		User Operations For Zend (UOPZ): The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: User Operations For Zend (UOPZ)
	:twitter:description: User Operations For Zend (UOPZ): The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: User Operations For Zend (UOPZ)
	:og:type: article
	:og:description: The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uopz.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","name":"User Operations For Zend (UOPZ)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/User Operations For Zend (UOPZ).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


User Operations For Zend (UOPZ)
-------------------------------

The uopz - User Operations for Zend - extension exposes Zend Engine functionality normally used at compilation and execution time in order to allow modification of the internal structures that represent PHP code, and for user code to interact with the VM.

.. code-block:: php
   
   <?php
   
   // Dynamically adds an interface to a class with UOPZ
   
   interface myInterface {}
   
   class myClass {}
   
   uopz_implement(myClass::class, myInterface::class);
   
   var_dump(class_implements(myClass::class));
   ?>
   


`Documentation <https://www.php.net/manual/en/book.uopz.php>`__

See also `UOPZ <https://github.com/krakjoe/uopz>`__
