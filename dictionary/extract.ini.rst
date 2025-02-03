.. _extract:
.. meta::
	:description:
		extract(): extract() is a native PHP function, which creates arrays from an array containing variables and their values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: extract()
	:twitter:description: extract(): extract() is a native PHP function, which creates arrays from an array containing variables and their values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: extract()
	:og:type: article
	:og:description: extract() is a native PHP function, which creates arrays from an array containing variables and their values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/extract.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"extract()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"extract() is a native PHP function, which creates arrays from an array containing variables and their values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/extract().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


extract()
---------

extract() is a native PHP function, which creates arrays from an array containing variables and their values.

extract() has option to handle situations where the variables are already existing, and how those conflicts should be handled : by default, it overwrites the local variables.

Options are :  ``EXTR_OVERWRITE``, ``EXTR_SKIP``, ``EXTR_PREFIX_SAME``, ``EXTR_PREFIX_ALL``, ``EXTR_PREFIX_INVALID``, ``EXTR_IF_EXISTS``, ``EXTR_PREFIX_IF_EXISTS``, ``EXTR_REFS``.

This function is the opposite of compact().


.. code-block:: php
   
   <?php
   
   $a = 0; // $a is getting overwritten
   $array = extract(['a' => 1, 'b' => 2]);
   
   echo $a + $b; // 2
   ?>
   


`Documentation <https://www.php.net/manual/en/function.extract.php>`__

Related : :ref:`compact() <compact>`, :ref:`Variable Variables <variable-variable>`
