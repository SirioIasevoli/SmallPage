<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;


    /**
    * @ORM\OneToMany(targetEntity="AppBundle\Entity\Visit", mappedBy="city_id", cascade="persist")
    */
    private $visits_city;


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
     * @return City
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
     * Constructor
     */
    public function __construct()
    {
        $this->visits_city = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add visitsCity
     *
     * @param \AppBundle\Entity\Visit $visitsCity
     *
     * @return City
     */
    public function addVisitsCity(\AppBundle\Entity\Visit $visitsCity)
    {
        $this->visits_city[] = $visitsCity;

        return $this;
    }

    /**
     * Remove visitsCity
     *
     * @param \AppBundle\Entity\Visit $visitsCity
     */
    public function removeVisitsCity(\AppBundle\Entity\Visit $visitsCity)
    {
        $this->visits_city->removeElement($visitsCity);
    }

    /**
     * Get visitsCity
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVisitsCity()
    {
        return $this->visits_city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return City
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
}
