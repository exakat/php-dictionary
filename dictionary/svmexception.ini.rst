.. _svmexception:

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

Related : :ref:`Exception <exception>`, :ref:`Support Vector Machine <svm>`
