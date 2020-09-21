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

        for($i=1; $i<=30; $i++){

            $lyrics = new Lyric;
            $lyrics->setBand($faker->name);
            $lyrics->setLyrics($faker->text);
            $lyrics->setYear(rand(1970,2020));

            $genres = ["metal","pop","progressive metal","progressive rock","rnb","hiphop","rap","world"];
            $lyrics->setGenre(array_rand(array_combine($genres, $genres)));

            $lyrics->setSong($faker->name);

            $manager->persist($lyrics);

        }

        $manager->flush();
    }
}
