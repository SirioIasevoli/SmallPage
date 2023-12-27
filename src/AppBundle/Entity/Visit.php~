<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visit
 *
 * @ORM\Table(name="visit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisitRepository")
 */
class Visit
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
     * @var string
     *
     * @ORM\Column(name="visit_percent", type="integer")
     */
    private $visitPercent;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person", inversedBy="visits_person")
    * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
    */
    private $person_id;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City", inversedBy="visits_city")
    * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
    */
    private $city_id;

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
     * Set visitPercent
     *
     * @param string $visitPercent
     *
     * @return Visit
     */
    public function setVisitPercent($visitPercent)
    {
        $this->visitPercent = $visitPercent;

        return $this;
    }

    /**
     * Get visitPercent
     *
     * @return string
     */
    public function getVisitPercent()
    {
        return $this->visitPercent;
    }

    /**
     * Set personId
     *
     * @param \AppBundle\Entity\Person $personId
     *
     * @return Visit
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
     * Set cityId
     *
     * @param \AppBundle\Entity\City $cityId
     *
     * @return Visit
     */
    public function setCityId(\AppBundle\Entity\City $cityId = null)
    {
        $this->city_id = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return \AppBundle\Entity\City
     */
    public function getCityId()
    {
        return $this->city_id;
    }
}
