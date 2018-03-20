<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository")
 */
class Hotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agency", inversedBy="hotels")
     * @ORM\JoinColumn(nullable=true)
     */
    private $agency;
    
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $remoteId;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $location;
    
    /**
     * @ORM\Column(type="date")
     */
    private $start;
    
    /**
     * @ORM\Column(type="date")
     */
    private $end;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $stars;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $owned;
    
    function getId() {
        return $this->id;
    }
    function getAgency() {
        return $this->agency;
    }
    function getName() {
        return $this->name;
    }
    function getLocation() {
        return $this->location;
    }
    function getStart() {
        return $this->start;
    }
    function getEnd() {
        return $this->end;
    }
    function getStars() {
        return $this->stars;
    }
    function getPrice() {
        return $this->price;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setAgency($agency) {
        $this->agency = $agency;
    }
    function setName($name) {
        $this->name = $name;
    }
    function setLocation($location) {
        $this->location = $location;
    }
    function setStart($start) {
        $this->start = $start;
    }
    function setEnd($end) {
        $this->end = $end;
    }
    function setStars($stars) {
        $this->stars = $stars;
    }
    function setPrice($price) {
        $this->price = $price;
    }
    
    function getOwned() {
        return $this->owned;
    }
    function setOwned($owned) {
        $this->owned = $owned;
    }
    function getRemoteId() {
        return $this->remoteId;
    }
    function setRemoteId($remoteId) {
        $this->remoteId = $remoteId;
    }
    public function __toString() {
        return $this->name;
    }
}