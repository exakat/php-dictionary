.. _method-overloading:
.. meta::
	:description:
		Method Overloading: Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Method Overloading
	:twitter:description: Method Overloading: Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Method Overloading
	:og:type: article
	:og:description: Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/method-overloading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Method Overloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Method Overloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Method Overloading
------------------

Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters.

Method overloading is a PHP feature, based on the usage of the ``func_get_args()`` native function. It differs from other language's implementation as there is only one method definition, but multiple execution paths. Method overloading usually requires other features, such as typing or default values, to be handled manually.

.. code-block:: php
   
   <?php
   
   //
   class X {
       // $a and $b could be typed array|int
       // returntype could be array|int 
       // yet, it may end up being confusing
       function substract($a, $b) {
           if (is_int($a)) {
               return $a - (int) $b; 
           }
           
           if (is_array($a)) {
               return array_diff($a, (array) $b);
           }
       }
   }
   
   ?>


See also https://www.freecodecamp.org/news/method-overloading-in-php/, https://dev.to/xwero/php-method-overloading-5epg

Related : 
