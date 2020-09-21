<?php

namespace App\DataFixtures;

use App\Entity\Lyric;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create();

        $lyrics = new Lyric();

        for($i=1; $i<=10; $i++){

            $lyrics = clone $lyrics;
            $lyrics->setId($i);
            $lyrics->setBand($faker->name);
            $lyrics->setLyrics($faker->text);
            $lyrics->setYear(rand(1990,2015));
            $lyrics->setGenre("metal");
            $lyrics->setSong($faker->name);


            $manager->persist($lyrics);

        }

        $manager->flush();
    }
}
