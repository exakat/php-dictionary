# SVMException
The SVMException exception is thrown by the ``SVM::train()`` method. It happens when the model could not be trained. More generally, ``SVMException`` is the error class used throughout the ``svm`` extension, which provides PHP bindings to the ``libsvm`` library for support vector machine classification and regression. It can also be thrown by other methods, such as ``SVM::crossvalidate()``, ``SVMModel::load()``, or ``SVMModel::save()``, typically because of malformed training data, invalid kernel or cost parameters, or file I/O failures.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svmexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svmexception.html","name":"SVMException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The SVMException exception is thrown by the SVM::train() method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SVMException.html"]}],"keywords":["machine learning"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svm.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.svm.php"},{"@type":"CreativeWork","name":"Machine Learning with PHP: using Support Vector Machine (SVM) via ext-svm","url":"https:\/\/medium.datadriveninvestor.com\/machine-learning-with-php-using-support-vector-machine-svm-via-ext-svm-37ef9c3027cd"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"svmexception"}]}]}</script>
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

+ [Exception](exception.html)
+ [Support Vector Machine (SVM)](svm.html)
