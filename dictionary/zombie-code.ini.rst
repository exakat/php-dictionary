.. _zombie-code:
.. meta::
	:description:
		Zombie Code: Zombie code refers to sections of code that are still executed, but whose results are discarded.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Zombie Code
	:twitter:description: Zombie Code: Zombie code refers to sections of code that are still executed, but whose results are discarded
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Zombie Code
	:og:type: article
	:og:description: Zombie code refers to sections of code that are still executed, but whose results are discarded
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/zombie-code.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Zombie Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Zombie code refers to sections of code that are still executed, but whose results are discarded","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Zombie Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Zombie Code
-----------

Zombie code refers to sections of code that are still executed, but whose results are discarded. It is essentially dead or unused code that serves no purpose and can negatively impact the codebase.

Zombie code slows down the application, yet are logged as being used. They are a various of dead code. 



.. code-block:: php
   
   <?php
   
   // $capitalized is calculated from $name
   $capitalized = ucfirst(strtolower($name));
   
   // $capitalized is not used later in the code. 
   echo "Hello $name\n";
   
   ?>


`Documentation <https://www.calculquebec.ca/en/communiques/zombie-code/>`__

See also `Zombie Code <https://www.calculquebec.ca/en/communiques/zombie-code/>`_

Related : :ref:`Dead Code <dead-code>`
