<?php

namespace ContactBundle\Entity;

use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Builder\Annotation\Resource;

/**
 * @Resource()
 */
class Email extends CommunicationWay
{
    /**
     * @Groups({"contacts"})
     */
    protected $email;

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
