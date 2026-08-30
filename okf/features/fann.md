---
type: "extension"
title: "Fast Artificial Neural Network (FANN)"
description: "``FANN``, for Fast Artificial Neural Network, is a PIE extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks."
resource: "https://www.php.net/manual/en/book.fann.php"
tags: ["extension", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Fast Artificial Neural Network (FANN)

``FANN``, for Fast Artificial Neural Network, is a PIE extension that wraps the FANN C library, a lightweight library for creating, training, and running multilayer feedforward artificial neural networks.

The extension exposes functions to build a network with a chosen number of layers and neurons, train it against a data set using algorithms such as backpropagation, and then run inference on new inputs. Networks can be saved to and loaded from disk, so a model can be trained once and reused across requests without retraining.

FANN predates the current generation of PHP machine-learning libraries, and its API is comparatively low-level: it does not provide dataset preprocessing, model selection, or GPU acceleration. It remains useful for small, fast, embeddable networks where pulling in a heavier stack such as TensorFlow via a bridge is unnecessary.

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

## Documentation
- [https://www.php.net/manual/en/book.fann.php](https://www.php.net/manual/en/book.fann.php)

## See Also
- [FANN library](https://leenissen.dk/fann/wp/)

## Related
- [Machine Learning](/features/machine-learning.md)
- [Algorithm](/features/algorithm.md)
- [GNU Multiple Precision (GMP)](/features/gmp.md)

## Details
- Extension: ext-fann

