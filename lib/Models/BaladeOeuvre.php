<?php
/*
 * Balade
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="balades_oeuvres")
 */
class BaladeOeuvre {
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Oeuvre", inversedBy="balades")
     */
    private $oeuvre;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Balade", inversedBy="oeuvres")
     */
    private $balade;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordre;
}
