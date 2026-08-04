# Cold Start
A cold start is the delay incurred when a serverless function or containerised service must be initialised from scratch before handling a request. The runtime environment, aka the container, the PHP process, the class autoloading, is not yet warm, so the first invocation takes significantly longer than subsequent ones.

In a FaaS environment, aka AWS Lambda, Google Cloud Functions, etc., a cold start involves: provisioning a container, downloading the function package, initialising the PHP runtime, and executing any bootstrap code, framework boot, DI container compilation, autoloader initialisation. For PHP, cold starts commonly range from a few hundred milliseconds to over a second depending on framework size.

Subsequent invocations reuse the warm container and execute in milliseconds. Containers are typically kept warm for a few minutes of inactivity before being torn down.

Mitigation strategies include: provisioned concurrency by pre-warming a fixed number of instances, reducing the deployment package size and bootstrap time, using slim frameworks or no framework for latency-sensitive functions, and keeping functions warm via scheduled pings.
```php
<?php

    // Bref, PHP on Lambda, minimise cold start by avoiding heavy bootstrap
    // Bad: full Symfony kernel boot on every cold start
    $kernel = new Kernel('prod', false);
    $kernel->boot(); // loads 300+ classes, compiles DI container
    
    // Better for Lambda: pre-compiled container, minimal bootstrap
    // Or use a micro-runtime that skips the framework entirely
    return function (array $event): array {
        // Lightweight handler — only what this function needs
        $name = $event['queryStringParameters']['name'] ?? 'world';
        return [
            'statusCode' => 200,
            'body'       => json_encode(['message' => 'Hello, ' . $name . '!']),
        ];
    };
    
    // Provisioned concurrency (configured in AWS, not in PHP):
    // keeps N containers permanently warm, eliminating cold starts for baseline traffic

?>
```

## See Also

+ [Bref: Cold Start](https://bref.sh/docs/environment/cold-starts)

Related : [Function-as-a-Service (FaaS)](Function-as-a-Service (FaaS)), [Serverless](Serverless), [Latency](Latency), [Performance](Performance)
