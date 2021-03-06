<?php

namespace App\DataFixtures;

use App\Entity\Collection;
use Cocur\Slugify\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class CollectionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $slugify = new Slugify();

        $faker = Factory::create('fr_FR');

        for ($i = 0; $i<5; $i++)
        {

            $name = $faker->word;

            $collection = new Collection();
            $collection->setName(ucwords($name));
            $collection->setSlug($slugify->slugify($name));
            $collection->setPictureUrl($faker->imageUrl(1920, 720, 'cats'));
            $collection->setDateAdd(new \DateTime());

            $manager->persist($collection);
        }


        $manager->flush();
    }
}
