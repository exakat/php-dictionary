.. _index-array:
.. _key:
.. meta::
	:description:
		Index For Arrays: A index is the identifier of an specific element in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Index For Arrays
	:twitter:description: Index For Arrays: A index is the identifier of an specific element in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Index For Arrays
	:og:type: article
	:og:description: A index is the identifier of an specific element in an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/index-array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Index For Arrays","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"A index is the identifier of an specific element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Index For Arrays.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Index For Arrays
----------------

A index is the identifier of an specific element in an array. They may automatically generated, by simply omitting them at creation time. 

PHP index may be integers or strings only. Other data types generate an error or a type conversion. For example, floats are turned into integer. integer-shaped strings will also be turned into integer.

PHP index start at 0. They may be automatically assigned by appending a new value with the `[]` operator : then, they use the greatest available index + 1.


.. code-block:: php
   
   
   <?php
       $array = ['a', 'b', 'c'];
       
       echo $array[0];
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

See also `PHP: Frankenstein arrays <https://vazaha.blog/en/9/php-frankenstein-arrays>`_, `Filtering an array by keys in PHP <https://yellowduck.be/posts/filtering-an-array-by-keys-in-php>`_

Related : :ref:`Array <array>`, :ref:`Data Container <data-container>`, :ref:`Collection <collection>`, :ref:`Index <index>`, :ref:`Map <map>`, :ref:`negative-index <negative-index>`, :ref:`Square Brackets <square-bracket>`
