# IaaS
IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage.

Unlike PaaS or SaaS, IaaS gives the consumer control over the operating system, runtime, and application stack. The provider manages physical hardware and hypervisors; the consumer manages everything above.

PHP applications hosted on IaaS run on virtual machines or bare-metal instances managed by the team. Common IaaS providers include AWS EC2, Google Compute Engine, and Azure Virtual Machines. Automation tools such as Ansible, Terraform, or Chef are typically used to provision and configure the PHP runtime, web server, and database on top of the raw infrastructure.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iaas.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iaas.html","name":"IaaS","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:16:50 +0000","dateModified":"Wed, 19 Aug 2026 08:16:50 +0000","description":"IaaS, Infrastructure as a Service, is a cloud-computing model in which a provider supplies virtualized computing resources, such as servers, storage, and networking, over the internet, on demand and billed by usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/IaaS.html"]}],"alternateName":["infrastructure-as-a-service"],"keywords":["cloud","infrastructure","devops","hosting"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/paas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saas.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cloud.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/application.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/docker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hosting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pay-as-you-go.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serverless.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Infrastructure_as_a_service"},{"@type":"CreativeWork","name":"AWS EC2","url":"https:\/\/aws.amazon.com\/ec2\/"},{"@type":"CreativeWork","name":"Google Compute Engine","url":"https:\/\/cloud.google.com\/compute"},{"@type":"CreativeWork","name":"Azure Virtual Machines","url":"https:\/\/azure.microsoft.com\/en-us\/products\/virtual-machines\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"iaas"}]}]}</script>
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

+ [PaaS](paas.html)
+ [Software-as-a-Service (SAAS)](saas.html)
+ [Cloud](cloud.html)
+ [Application](application.html)
+ [Docker](docker.html)
+ [Hosting](hosting.html)
+ [Pay-as-you-go](pay-as-you-go.html)
+ [Serverless](serverless.html)

## Related packages

+ [aws/aws-sdk-php](https://packagist.org/packages/aws/aws-sdk-php)
