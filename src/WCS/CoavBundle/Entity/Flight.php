<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flight
 */
class Flight
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pilot;

    /**
     * @var integer
     */
    private $freeSeats;

    /**
     * @var \DateTime
     */
    private $takeofTime;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $flight;

    /**
     * @var \WCS\CoavBundle\Entity\Terrain
     */
    private $departure;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flight = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pilot
     *
     * @param string $pilot
     * @return Flight
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;

        return $this;
    }

    /**
     * Get pilot
     *
     * @return string 
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * Set freeSeats
     *
     * @param integer $freeSeats
     * @return Flight
     */
    public function setFreeSeats($freeSeats)
    {
        $this->freeSeats = $freeSeats;

        return $this;
    }

    /**
     * Get freeSeats
     *
     * @return integer 
     */
    public function getFreeSeats()
    {
        return $this->freeSeats;
    }

    /**
     * Set takeofTime
     *
     * @param \DateTime $takeofTime
     * @return Flight
     */
    public function setTakeofTime($takeofTime)
    {
        $this->takeofTime = $takeofTime;

        return $this;
    }

    /**
     * Get takeofTime
     *
     * @return \DateTime 
     */
    public function getTakeofTime()
    {
        return $this->takeofTime;
    }

    /**
     * Add flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     * @return Flight
     */
    public function addFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flight[] = $flight;

        return $this;
    }

    /**
     * Remove flight
     *
     * @param \WCS\CoavBundle\Entity\Reservation $flight
     */
    public function removeFlight(\WCS\CoavBundle\Entity\Reservation $flight)
    {
        $this->flight->removeElement($flight);
    }

    /**
     * Get flight
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * Set departure
     *
     * @param \WCS\CoavBundle\Entity\Terrain $departure
     * @return Flight
     */
    public function setDeparture(\WCS\CoavBundle\Entity\Terrain $departure = null)
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Get departure
     *
     * @return \WCS\CoavBundle\Entity\Terrain 
     */
    public function getDeparture()
    {
        return $this->departure;
    }
    /**
     * @var string
     */
    private $arrival;


    /**
     * Set arrival
     *
     * @param string $arrival
     * @return Flight
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;

        return $this;
    }

    /**
     * Get arrival
     *
     * @return string 
     */
    public function getArrival()
    {
        return $this->arrival;
    }
    /**
     * @var \WCS\CoavBundle\Entity\PlaneModel
     */
    private $plane;


    /**
     * Set plane
     *
     * @param \WCS\CoavBundle\Entity\PlaneModel $plane
     * @return Flight
     */
    public function setPlane(\WCS\CoavBundle\Entity\PlaneModel $plane = null)
    {
        $this->plane = $plane;

        return $this;
    }

    /**
     * Get plane
     *
     * @return \WCS\CoavBundle\Entity\PlaneModel 
     */
    public function getPlane()
    {
        return $this->plane;
    }
}
