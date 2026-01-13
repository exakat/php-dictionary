.. _function-subscripting:
.. _subscripting:
.. meta::
	:description:
		Function Subscripting: Function subscripting is the ability to apply operators like ->, .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Function Subscripting
	:twitter:description: Function Subscripting: Function subscripting is the ability to apply operators like ->, 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Function Subscripting
	:og:type: article
	:og:description: Function subscripting is the ability to apply operators like ->, 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/function-subscripting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Function Subscripting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Function subscripting is the ability to apply operators like ->, ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Function Subscripting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Function Subscripting
---------------------

Function subscripting is the ability to apply operators like ->, ?-> or [<index>] directly on the results of a method call. 

.. code-block:: php
   
   <?php
   
   // displays the third element of the response of 'callMethod', on object 'getObject';
   echo getObject()->callMethod()[3];
   ?>


`Documentation <https://www.php.net/manual/en/functions.user-defined.php>`__

Related : :ref:`Dereferencing <dereferencing>`
