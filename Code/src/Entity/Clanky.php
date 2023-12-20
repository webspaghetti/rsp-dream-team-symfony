<?php

namespace App\Entity;

use App\Repository\ClankyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClankyRepository::class)]
class Clanky
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazev_clanku = null;

    #[ORM\Column]
    private ?int $autor_clanku = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $abstrakt_clanku = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text_clanku = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $img_url = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datum_publikace = null;

    #[ORM\Column]
    private ?int $id_uzivatele = null;

    #[ORM\Column(length: 255)]
    private ?string $id_kategorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazevClanku(): ?string
    {
        return $this->nazev_clanku;
    }

    public function setNazevClanku(string $nazev_clanku): static
    {
        $this->nazev_clanku = $nazev_clanku;

        return $this;
    }

    public function getAutorClanku(): ?int
    {
        return $this->autor_clanku;
    }

    public function setAutorClanku(int $autor_clanku): static
    {
        $this->autor_clanku = $autor_clanku;

        return $this;
    }

    public function getAbstraktClanku(): ?string
    {
        return $this->abstrakt_clanku;
    }

    public function setAbstraktClanku(string $abstrakt_clanku): static
    {
        $this->abstrakt_clanku = $abstrakt_clanku;

        return $this;
    }

    public function getTextClanku(): ?string
    {
        return $this->text_clanku;
    }

    public function setTextClanku(string $text_clanku): static
    {
        $this->text_clanku = $text_clanku;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->img_url;
    }

    public function setImgUrl(string $img_url): static
    {
        $this->img_url = $img_url;

        return $this;
    }

    public function getDatumPublikace(): ?\DateTimeInterface
    {
        return $this->datum_publikace;
    }

    public function setDatumPublikace(\DateTimeInterface $datum_publikace): static
    {
        $this->datum_publikace = $datum_publikace;

        return $this;
    }

    public function getIdUzivatele(): ?int
    {
        return $this->id_uzivatele;
    }

    public function setIdUzivatele(int $id_uzivatele): static
    {
        $this->id_uzivatele = $id_uzivatele;

        return $this;
    }

    public function getIdKategorie(): ?string
    {
        return $this->id_kategorie;
    }

    public function setIdKategorie(string $id_kategorie): static
    {
        $this->id_kategorie = $id_kategorie;

        return $this;
    }
}
