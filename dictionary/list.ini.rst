.. _list:
.. meta::
	:description:
		List: List() acts as the contrary to array() : it will break an array into individual elements, and assign them to the arguments of the list.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: List
	:twitter:description: List: List() acts as the contrary to array() : it will break an array into individual elements, and assign them to the arguments of the list
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: List
	:og:type: article
	:og:description: List() acts as the contrary to array() : it will break an array into individual elements, and assign them to the arguments of the list
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/list.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"List","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"List() acts as the contrary to array() : it will break an array into individual elements, and assign them to the arguments of the list","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/List.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


List
----

List() acts as the contrary to array() : it will break an array into individual elements, and assign them to the arguments of the list. 

List() also has a short array version, which is ``[ ]`` the square brackets. Those square brackets are only appearing on the left side of an assignation. 

list() may omit extracted values by skipping their value, and leaving seemingly empty arguments. List() also supports double-arrow notation, where the key is provided. 

list() may be nested. It may also be used with foreach() structures.

list() looks like a function, though it is the only one to appears on the left part of an assignation, and is actually a language-construct.

A list is also the name given to arrays where the index are the automatic ones. 

``list()`` is the only expression where successive commas may be used.



.. code-block:: php
   
   <?php
   
   list($a, $b, $c) = [1,2,3];
   
   [$a, , [$c]] = [1,2,[3],4];
   
   [2 => $c, 0 => $a] = [1,2,3,4];
   
   $rows = [[1,2], [3, 4]];
   foreach($rows as [$a, $b]) {
       print "$a + $b\n";
   }
   
   // Only values are important here
   $list = range(10, 12);
   
   // some keys are missing => not a list
   $array = array(10, 4 => 12);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.list.php>`__

See also `List-o-mania <https://markbakeruk.net/2022/06/06/list-o-mania/>`_

Related : :ref:`Array <array>`
