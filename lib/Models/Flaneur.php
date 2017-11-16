<?php
/*
 * Flaneur
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="flaneurs")
 */
class Flaneur {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $login;
    /**
     * @ORM\Column(type="string")
     */
    private $motPasse;
    /**
     * @ORM\Column(type="string")
     */
    private $telephone;
    /**
     * @ORM\Column(type="string")
     */
    private $mail;
    /**
     * @ORM\Column(type="string")
     */
    private $adresse;
}
