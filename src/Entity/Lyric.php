<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="lyrics")
 */
class Lyric
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id")
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
}