# IaaS
IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage.

Unlike PaaS or SaaS, IaaS gives the consumer control over the operating system, runtime, and application stack. The provider manages physical hardware and hypervisors; the consumer manages everything above.

PHP applications hosted on IaaS run on virtual machines or bare-metal instances managed by the team. Common IaaS providers include AWS EC2, Google Compute Engine, and Azure Virtual Machines. Automation tools such as Ansible, Terraform, or Chef are typically used to provision and configure the PHP runtime, web server, and database on top of the raw infrastructure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iaas.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iaas.html","name":"IaaS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:10 +0000","dateModified":"Fri, 19 Jun 2026 21:24:10 +0000","description":"IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/IaaS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Interacting with IaaS resources via an SDK — AWS example
    use Aws\Ec2\Ec2Client;

    $client = new Ec2Client([
        'region'  => 'eu-west-1',
        'version' => 'latest',
    ]);

    // List running instances
    $result = $client->describeInstances([
        'Filters' => [['Name' => 'instance-state-name', 'Values' => ['running']]],
    ]);

    foreach ($result['Reservations'] as $reservation) {
        foreach ($reservation['Instances'] as $instance) {
            echo $instance['InstanceId'] . PHP_EOL;
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Infrastructure_as_a_service)**
## See Also

+ [AWS EC2](https://aws.amazon.com/ec2/)
+ [Google Compute Engine](https://cloud.google.com/compute)
+ [Azure Virtual Machines](https://azure.microsoft.com/en-us/products/virtual-machines/)

## Related

+ [PaaS](paas.ini.html)
+ [Software-as-a-Service (SAAS)](saas.ini.html)
+ [Cloud](cloud.ini.html)
+ [Application](application.ini.html)
+ [Docker](docker.ini.html)
+ [Hosting](hosting.ini.html)
+ [Pay-as-you-go](pay-as-you-go.ini.html)
+ [Serverless](serverless.ini.html)

## Related packages

+ [aws/aws-sdk-php](https://packagist.org/packages/aws/aws-sdk-php)
