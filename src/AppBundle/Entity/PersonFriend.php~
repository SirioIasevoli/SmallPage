<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonFriend
 *
 * @ORM\Table(name="person_friend")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonFriendRepository")
 */
class PersonFriend
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person", inversedBy="has_friends")
    * @ORM\JoinColumn(name="friend_id", referencedColumnName="id")
    */
    private $friend_id;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person", inversedBy="is_friend")
    * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
    */
    private $person_id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    

    

    /**
     * Set personId
     *
     * @param \AppBundle\Entity\Person $personId
     *
     * @return PersonFriend
     */
    public function setPersonId(\AppBundle\Entity\Person $personId = null)
    {
        $this->person_id = $personId;

        return $this;
    }

    /**
     * Get personId
     *
     * @return \AppBundle\Entity\Person
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * Set friendId
     *
     * @param \AppBundle\Entity\Person $friendId
     *
     * @return PersonFriend
     */
    public function setFriendId(\AppBundle\Entity\Person $friendId = null)
    {
        $this->friend_id = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return \AppBundle\Entity\Person
     */
    public function getFriendId()
    {
        return $this->friend_id;
    }
}
