# Function-as-a-Service (FaaS)
Function-as-a-Service, or FaaS, is a serverless execution model where individual functions are deployed, invoked on demand, and billed per execution. The cloud provider manages all infrastructure: provisioning, scaling, and teardown.

Each function is stateless, short-lived, and triggered by an event, such as HTTP request, queue message, scheduled cron, S3 upload. The provider scales instances automatically from zero to thousands.

PHP runs on FaaS platforms through runtime layers. The most common approach is Bref, a PHP Lambda layer for AWS Lambda that handles bootstrapping the PHP runtime, forwarding events, and returning responses. Similar support exists for Google Cloud Functions and Azure Functions.

The main drawback of FaaS for PHP is cold start latency: the first invocation after an idle period must initialise the container and PHP runtime before executing. Subsequent invocations reuse the warm container and are fast.
```php
<?php

// AWS Lambda handler via Bref (https://bref.sh)
// File: index.php

use Bref\Context\Context;

return function (array $event, Context $context): string {
    $name = $event['name'] ?? 'world';
    return 'Hello, ' . $name . '!';
};

// template.yaml (SAM):
// Resources:
//   HelloFunction:
//     Type: AWS::Serverless::Function
//     Properties:
//       FunctionName: hello
//       Runtime: provided.al2
//       Layers:
//         - !Sub arn:aws:lambda::534081306603:layer:php-83:x
//       Handler: index.php

?>
```

## See Also

+ [Bref — PHP on AWS Lambda](https://bref.sh)

Related : [Serverless](Serverless), [Cold Start](Cold Start), [Event Driven](Event Driven), [Stateless](Stateless)
