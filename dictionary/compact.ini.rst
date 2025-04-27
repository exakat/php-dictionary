.. _compact:
.. meta::
	:description:
		compact(): compact() is a native PHP function, which creates an array containing variables and their values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: compact()
	:twitter:description: compact(): compact() is a native PHP function, which creates an array containing variables and their values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: compact()
	:og:type: article
	:og:description: compact() is a native PHP function, which creates an array containing variables and their values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compact.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"compact()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:12:06 +0000","dateModified":"Wed, 05 Mar 2025 15:12:06 +0000","description":"compact() is a native PHP function, which creates an array containing variables and their values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/compact().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


compact()
---------

compact() is a native PHP function, which creates an array containing variables and their values.

It is the opposite of extract().


.. code-block:: php
   
   <?php
   
   $a = '1';
   $b = '2';
   
   $array = compact('a', 'b');
   // ['a' => 1, 'b' => 2];
   ?>
   


`Documentation <https://www.php.net/manual/en/function.compact.php>`__

See also https://gist.github.com/Ocramius/c56a8e8ff25a8e0bd96800c41edab02a

Related : :ref:`extract() <extract>`, :ref:`Variable Variables <variable-variable>`
