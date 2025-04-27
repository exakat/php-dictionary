.. _svmexception:
.. meta::
	:description:
		SVMException: The SVMException exception is thrown by the SVM::train() method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SVMException
	:twitter:description: SVMException: The SVMException exception is thrown by the SVM::train() method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SVMException
	:og:type: article
	:og:description: The SVMException exception is thrown by the SVM::train() method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/svmexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"SVMException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The SVMException exception is thrown by the SVM::train() method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SVMException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SVMException
------------

The SVMException exception is thrown by the SVM::train() method. It happens when the model could not be trained. 

.. code-block:: php
   
   <?php
   $svm = new SVM();
   try {
   	$model = $svm->train($data);
   } catch (SVMException $e) {
   	print $e->getMessage();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.svm.php>`__

See also `Machine Learning with PHP: using Support Vector Machine (SVM) via ext-svm <https://medium.datadriveninvestor.com/machine-learning-with-php-using-support-vector-machine-svm-via-ext-svm-37ef9c3027cd>`_

Related : :ref:`Exception <exception>`, :ref:`Support Vector Machine (SVM) <svm>`
