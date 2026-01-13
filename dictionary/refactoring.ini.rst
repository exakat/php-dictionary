.. _refactoring:
.. meta::
	:description:
		Refactoring: Refactoring, in PHP as in any programming language, refers to the process of restructuring and improving the codebase of a PHP application without changing its external behavior.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Refactoring
	:twitter:description: Refactoring: Refactoring, in PHP as in any programming language, refers to the process of restructuring and improving the codebase of a PHP application without changing its external behavior
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Refactoring
	:og:type: article
	:og:description: Refactoring, in PHP as in any programming language, refers to the process of restructuring and improving the codebase of a PHP application without changing its external behavior
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/refactoring.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Refactoring","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Refactoring, in PHP as in any programming language, refers to the process of restructuring and improving the codebase of a PHP application without changing its external behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Refactoring.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Refactoring
-----------

Refactoring, in PHP as in any programming language, refers to the process of restructuring and improving the codebase of a PHP application without changing its external behavior. The primary goal of refactoring is to make the code more readable, maintainable, and efficient while reducing code duplication and potential bugs. Refactoring is an essential practice in software development to ensure that the code remains clean and adaptable as the project evolves. 

.. code-block:: php
   
   
   <?php
   
   function factorial(int $n) : int {
   	$return = 2;
   	for($i = 3; $i <= $n; ++$i) {
   		$return *= $i;
   	}
   	
   	return $return;
   }
   
   function factorialr(int $n) : int {
   	if ($n === 2) { return 1; }
   	
   	return factorialr($n - 1);
   
   	return $return;
   }
   
   // Note : checks on $n >= 1 are omitted here.
   
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Code_refactoring>`__

See also `Refactoring without tests should be fine <https://matthiasnoback.nl/2022/10/refactoring-without-tests-should-be-fine/>`_, `Refactoring Guru <https://refactoring.guru/refactoring>`_, `PHP Refactoring: The Art of Improving Code Quality and Maintainability <https://www.fuseweb.io/en/2023/05/10/php-refactoring-code-quality-maintainability/>`_

Related : :ref:`Test <test>`
