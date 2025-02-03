.. _halt-compiler:
.. meta::
	:description:
		__halt_compiler(): Halts the execution of the compiler.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __halt_compiler()
	:twitter:description: __halt_compiler(): Halts the execution of the compiler
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __halt_compiler()
	:og:type: article
	:og:description: Halts the execution of the compiler
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/halt-compiler.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"__halt_compiler()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Halts the execution of the compiler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__halt_compiler().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__halt_compiler()
-----------------

Halts the execution of the compiler. This can be useful to embed data in PHP scripts, like the installation files. 

Byte position of the data start can be determined by the ``__COMPILER_HALT_OFFSET__`` constant which is defined only if there is a __halt_compiler() presented in the file. 

Note : this is the documentation from PHP.net.



.. code-block:: php
   
   
   <?php
   
   // adapted from the manual
   
   // open this file
   $fp = fopen(__FILE__, 'r');
   
   // seek file pointer to data
   fseek($fp, __COMPILER_HALT_OFFSET__);
   
   // and output it
   var_dump(stream_get_contents($fp));
   
   // the end of the script execution
   __halt_compiler(); This part of the file is read by the script.
   


`Documentation <https://www.php.net/manual/en/function.halt-compiler.php>`__
