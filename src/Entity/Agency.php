<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgencyRepository")
 */
class Agency
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
      

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;
    
    
     
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Hotel", mappedBy="agency")
     */
    private $hotels;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Flight", mappedBy="agency")
     */
    private $flights;

    public function getId()
    {
        return $this->id;
    }
     
    function getHotels() {
        return $this->hotels;
    }

    function getFlights() {
        return $this->flights;
    }

    function setHotels($hotels) {
        $this->hotels = $hotels;
    }

    function setFlights($flights) {
        $this->flights = $flights;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
     public function __toString() {
        return $this->name;
    }
}
