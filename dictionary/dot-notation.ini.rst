.. _dot-notation:
.. meta::
	:description:
		Dot Notation: The dot notation refers to a syntax to access deeply-nested elements in arrays.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dot Notation
	:twitter:description: Dot Notation: The dot notation refers to a syntax to access deeply-nested elements in arrays
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dot Notation
	:og:type: article
	:og:description: The dot notation refers to a syntax to access deeply-nested elements in arrays
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dot-notation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dot Notation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:37 +0000","dateModified":"Mon, 26 Jan 2026 11:11:37 +0000","description":"The dot notation refers to a syntax to access deeply-nested elements in arrays","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dot Notation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dot Notation
------------

The dot notation refers to a syntax to access deeply-nested elements in arrays. Instead of repeating the classic ``[index]`` notation, dot notation offers a way to chain the indices with dots to reach the value. 

Dot notation is easier to read, in particular when there are numerous elements. 

Dot notation is not a PHP native feature. It is available via independent packages or as feature of frameworks.

.. code-block:: php
   
   <?php
   
   // example from https://github.com/adbario/php-dot-notation
   
   $array['info']['home']['address'] = 'Kings Square';
   
   echo $array['info']['home']['address'];
   
   // Kings Square
   
   $dot->set('info.home.address', 'Kings Square');
   
   echo $dot->get('info.home.address');
   
   ?>


See also https://medium.com/@assertchris/dot-notation-3fd3e42edc61

Related : :ref:`Array <array>`, :ref:`Multidimensional Array <multidimensional-array>`

Related packages : `dflydev/dot-access-data <https://packagist.org/packages/dflydev/dot-access-data>`_, `adbario/php-dot-notation <https://packagist.org/packages/adbario/php-dot-notation>`_
