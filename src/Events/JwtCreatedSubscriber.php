<?php

namespace App\Events;

use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

class JwtCreatedSubscriber
{
    public function updateJwtData(JWTCreatedEvent $event)
    {
        $data = $event->getData();
        $data['firstName'] = $event->getUser()->getFirstName();
        $data['lastName'] = $event->getUser()->getLastName();
        $event->setData($data);
    }
}
