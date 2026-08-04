# SVMException
The SVMException exception is thrown by the ``SVM::train()`` method. It happens when the model could not be trained. More generally, ``SVMException`` is the error class used throughout the ``svm`` extension, which provides PHP bindings to the ``libsvm`` library for support vector machine classification and regression. It can also be thrown by other methods, such as ``SVM::crossvalidate()``, ``SVMModel::load()``, or ``SVMModel::save()``, typically because of malformed training data, invalid kernel or cost parameters, or file I/O failures.
```php
<?php

    $svm = new SVM();
    try {
        $model = $svm->train($data);
    } catch (SVMException $e) {
        print $e->getMessage();
    }

?>
```

## See Also

+ [Machine Learning with PHP: using Support Vector Machine (SVM) via ext-svm](https://medium.datadriveninvestor.com/machine-learning-with-php-using-support-vector-machine-svm-via-ext-svm-37ef9c3027cd)

Related : [Exception](Exception), [Support Vector Machine (SVM)](Support Vector Machine (SVM))
