<?php
/**
 * @package Newscoop
 * @copyright 2012 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Log")
 */
class Log
{
    /**
     * @ORM\Id 
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", name="time_created")
     * @var DateTime
     */
    private $created;

    /**
     * @ORM\ManyToOne(targetEntity="Newscoop\Entity\Event")
     * @ORM\JoinColumn(name="fk_event_id", referencedColumnName="id")
     * @var Newscoop\Entity\Event
     */
    private $eventId;

    /**
     * @ORM\ManyToOne(targetEntity="Newscoop\Entity\User", fetch="EAGER")
     * @ORM\JoinColumn(name="fk_user_id", referencedColumnName="Id")
     * @var Newscoop\Entity\User
     */
    private $userId;

    /**
     * @ORM\Column(name="text")
     * @var int
     */
    private $message;

    /**
     * @ORM\Column(name="user_ip")
     * @var string
     */
    private $userIp;

    /**
     * Get created
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Get userId
     * @return Newscoop\Entity\User
     */
    public function getUser() {
        return $this->userId;
    }

    /**
     * Get eventId
     * @return Newscoop\Entity\Event
     */
    public function getEvent() {
        return $this->eventId;
    }

    /**
     * Get message
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }
}
