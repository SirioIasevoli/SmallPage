<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=64)
     */
    private $surname;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="smallint", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=8)
     */
    private $gender;

    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\PersonFriend", mappedBy="friend_id", cascade="persist")
    */
    private $has_friends;

    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Visit", mappedBy="person_id", cascade="persist")
    */
    private $visits_person;

    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\PersonFriend", mappedBy="person_id", cascade="persist")
    */
    private $is_friend;

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
     * Set name
     *
     * @param string $name
     *
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Person
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Person
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Person
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->visits_person = new \Doctrine\Common\Collections\ArrayCollection();
        $this->is_friend = new \Doctrine\Common\Collections\ArrayCollection();
    }

    

    /**
     * Add visitsPerson
     *
     * @param \AppBundle\Entity\Visit $visitsPerson
     *
     * @return Person
     */
    public function addVisitsPerson(\AppBundle\Entity\Visit $visitsPerson)
    {
        $this->visits_person[] = $visitsPerson;

        return $this;
    }

    /**
     * Remove visitsPerson
     *
     * @param \AppBundle\Entity\Visit $visitsPerson
     */
    public function removeVisitsPerson(\AppBundle\Entity\Visit $visitsPerson)
    {
        $this->visits_person->removeElement($visitsPerson);
    }

    /**
     * Get visitsPerson
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitsPerson()
    {
        return $this->visits_person;
    }

    /**
     * Add isFriend
     *
     * @param \AppBundle\Entity\PersonFriend $isFriend
     *
     * @return Person
     */
    public function addIsFriend(\AppBundle\Entity\PersonFriend $isFriend)
    {
        $this->is_friend[] = $isFriend;

        return $this;
    }

    /**
     * Remove isFriend
     *
     * @param \AppBundle\Entity\PersonFriend $isFriend
     */
    public function removeIsFriend(\AppBundle\Entity\PersonFriend $isFriend)
    {
        $this->is_friend->removeElement($isFriend);
    }

    /**
     * Get isFriend
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIsFriend()
    {
        return $this->is_friend;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Person
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Add hasFriend
     *
     * @param \AppBundle\Entity\PersonFriend $hasFriend
     *
     * @return Person
     */
    public function addHasFriend(\AppBundle\Entity\PersonFriend $hasFriend)
    {
        $this->has_friends[] = $hasFriend;

        return $this;
    }

    /**
     * Remove hasFriend
     *
     * @param \AppBundle\Entity\PersonFriend $hasFriend
     */
    public function removeHasFriend(\AppBundle\Entity\PersonFriend $hasFriend)
    {
        $this->has_friends->removeElement($hasFriend);
    }

    /**
     * Get hasFriends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHasFriends()
    {
        return $this->has_friends;
    }
}
