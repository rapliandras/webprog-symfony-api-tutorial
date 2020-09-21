<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LyricRepository")
 * @ORM\Table(name="lyrics")
 */
class Lyric
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="song", type="string")
     */
    protected $song;

    /**
     * @ORM\Column(name="lyrics", type="text")
     */
    protected $lyrics;

    /**
     * @ORM\Column(name="year", type="integer")
     */
    protected $year;

    /**
     * @ORM\Column(name="genre", type="string", length=40)
     */
    protected $genre;

    /**
     * @ORM\Column(name="band", type="string")
     */
    protected $band;

    public function getLyrics()
    {
        return $this->lyrics;
    }

    public function setLyrics($lyrics): void
    {
        $this->lyrics = $lyrics;
    }

    public function getSong()
    {
        return $this->song;
    }

    public function setSong($song): void
    {
        $this->song = $song;
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * @param mixed $band
     */
    public function setBand($band): void
    {
        $this->band = $band;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

}