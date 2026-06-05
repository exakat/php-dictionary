.. _compact:
.. meta::
	:description:
		compact(): ``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: compact()
	:twitter:description: compact(): ``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: compact()
	:og:type: article
	:og:description: ``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/compact.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"compact()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/compact().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


compact()
---------

``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.

It is the opposite of ``extract()``.

.. code-block:: php
   
   <?php
   
       $a = '1';
       $b = '2';
       
       $array = compact('a', 'b');
       // ['a' => 1, 'b' => 2];
   
   ?>


`Documentation <https://www.php.net/manual/en/function.compact.php>`__

See also ```compact()`` function in PHP, and why it is problematic due to its magic behavior <https://gist.github.com/Ocramius/c56a8e8ff25a8e0bd96800c41edab02a>`_.

Related : :ref:`extract() <extract>`, :ref:`Variable Variables <variable-variable>`, :ref:`Compact Array <compact-array>`, :ref:`Stubs Files <stubs>`
