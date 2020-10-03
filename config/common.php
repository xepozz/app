<?php

declare(strict_types=1);

use App\Contact\ContactMailer;
use App\Service\Mailer;
use Psr\Container\ContainerInterface;

/* @var array $params */

return [
    ContactMailer::class => static function (ContainerInterface $container) use ($params) {
        return (new ContactMailer(
            $container->get(Mailer::class),
            $params['mailer']['adminEmail']
        ));
    },
];
