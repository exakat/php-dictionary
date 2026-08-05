# SVMException
The SVMException exception is thrown by the ``SVM::train()`` method. It happens when the model could not be trained. More generally, ``SVMException`` is the error class used throughout the ``svm`` extension, which provides PHP bindings to the ``libsvm`` library for support vector machine classification and regression. It can also be thrown by other methods, such as ``SVM::crossvalidate()``, ``SVMModel::load()``, or ``SVMModel::save()``, typically because of malformed training data, invalid kernel or cost parameters, or file I/O failures.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/svmexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/svmexception.ini.html","name":"SVMException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:03:36 +0000","dateModified":"Mon, 13 Jul 2026 08:03:36 +0000","description":"The SVMException exception is thrown by the ``SVM::train()`` method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SVMException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.svm.php)**
## See Also

+ [Machine Learning with PHP: using Support Vector Machine (SVM) via ext-svm](https://medium.datadriveninvestor.com/machine-learning-with-php-using-support-vector-machine-svm-via-ext-svm-37ef9c3027cd)

## Related

+ [Exception](exception.ini.html)
+ [Support Vector Machine (SVM)](svm.ini.html)
