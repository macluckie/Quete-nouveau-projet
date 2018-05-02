<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plop
 *
 * @ORM\Table(name="plop")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlopRepository")
 */
class Plop
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
     * @ORM\Column(name="test", type="string", length=255)
     */
    private $test;

    /**
     * @var string
     *
     * @ORM\Column(name="tata", type="string", length=255)
     */
    private $tata;


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
     * Set test
     *
     * @param string $test
     *
     * @return Plop
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set tata
     *
     * @param string $tata
     *
     * @return Plop
     */
    public function setTata($tata)
    {
        $this->tata = $tata;

        return $this;
    }

    /**
     * Get tata
     *
     * @return string
     */
    public function getTata()
    {
        return $this->tata;
    }
}
