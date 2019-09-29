<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AloiteLaatikkoRepository")
 */
class AloiteLaatikko
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $aihe;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $etunimi;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $sukunimi;

    /**
     * @ORM\Column(type="text")
     */
    private $kuvaus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ote;

    /**
     * @ORM\Column(type="date")
     */
    private $kirjauspaiva;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $spostiosoite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAihe(): ?string
    {
        return $this->aihe;
    }

    public function setAihe(string $aihe): self
    {
        $this->aihe = $aihe;

        return $this;
    }

    public function getEtunimi(): ?string
    {
        return $this->etunimi;
    }

    public function setEtunimi(string $etunimi): self
    {
        $this->etunimi = $etunimi;

        return $this;
    }

    public function getSukunimi(): ?string
    {
        return $this->sukunimi;
    }

    public function setSukunimi(string $sukunimi): self
    {
        $this->sukunimi = $sukunimi;

        return $this;
    }

    public function getKuvaus(): ?string
    {
        return $this->kuvaus;
    }

    public function setKuvaus(string $kuvaus): self
    {
        $this->kuvaus = $kuvaus;

        return $this;
    }

    public function getOte(): ?string
    {
        return $this->ote;
    }

    public function setOte(string $ote): self
    {
        $this->ote = $ote;

        return $this;
    }

    public function getKirjauspaiva(): ?\DateTimeInterface
    {
        return $this->kirjauspaiva;
    }

    public function setKirjauspaiva(\DateTimeInterface $kirjauspaiva): self
    {
        $this->kirjauspaiva = $kirjauspaiva;

        return $this;
    }

    public function getSpostiosoite(): ?string
    {
        return $this->spostiosoite;
    }

    public function setSpostiosoite(string $spostiosoite): self
    {
        $this->spostiosoite = $spostiosoite;

        return $this;
    }
}
