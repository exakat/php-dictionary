.. _relaxed-syntax:
.. meta::
	:description:
		Relaxed Syntax: Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Relaxed Syntax
	:twitter:description: Relaxed Syntax: Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Relaxed Syntax
	:og:type: article
	:og:description: Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/relaxed-syntax.ini.html
	:og:locale: en


Relaxed Syntax
--------------

Relaxed syntax refers to the extra freedom in naming class elements, such as constant and methods, compared to creating global constant and functions. 

In particular, keywords are allowed for class constants and methods, while they are forbidden for global constants and functions. 

Note that using PHP keywords in specific 


.. code-block:: php
   
   <?php
   
   // That is not possible, as array is already reserved
   // function array() {}
   // const array = [];
   
   class x {
     	function array() { return [1]; }
   	const array = [2];
   
   	function foo() {
   		return $this->array() + self::array;
   	}
   }
   
   ?>


See also `Loosening Reserved Word Restrictions <https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words>`_

Related : :ref:`Naming <naming>`
