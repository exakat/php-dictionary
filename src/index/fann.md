# Fast Artificial Neural Network (FANN)
``FANN``, for Fast Artificial Neural Network, is a PIE extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks.

The extension exposes functions to build a network with a chosen number of layers and neurons, train it against a data set using algorithms such as backpropagation, and then run inference on new inputs. Networks can be saved to and loaded from disk, so a model can be trained once and reused across requests without retraining.

FANN predates the current generation of PHP machine-learning libraries, and its API is comparatively low-level: it does not provide dataset preprocessing, model selection, or GPU acceleration. It remains useful for small, fast, embeddable networks where pulling in a heavier stack such as TensorFlow via a bridge is unnecessary.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fann.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fann.html","name":"Fast Artificial Neural Network (FANN)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:36:20 +0000","dateModified":"Tue, 14 Jul 2026 05:36:20 +0000","description":"``FANN``, for Fast Artificial Neural Network, is a PIE extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Fast Artificial Neural Network (FANN).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fann"}]}]}</script>
```php
<?php

    // Create a network: 2 inputs, one hidden layer of 3 neurons, 1 output.
    $ann = fann_create_standard(3, 2, 3, 1);

    fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
    fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

    // Train on a data file of input/output pairs (FANN training file format).
    fann_train_on_file($ann, 'xor.data', 5000, 500, 0.0001);

    $output = fann_run($ann, [1, -1]);
    print_r($output);

    fann_destroy($ann);

?>
```

**[Documentation](https://www.php.net/manual/en/book.fann.php)**
## See Also

+ [FANN library](https://leenissen.dk/fann/wp/)

## Related

+ [Machine Learning](machine-learning.html)
+ [Algorithm](algorithm.html)
+ [GNU Multiple Precision (GMP)](gmp.html)
