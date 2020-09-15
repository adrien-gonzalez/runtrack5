<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Projets;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         for ($i = 0; $i < 10; $i++) {
         	$projet = new Projets();
	        $projet->setTitle('Article n° '.$i);
	        $projet->setContent("<p>TEST".$i."</p>");
	        $projet->setImage("http://placehold.it/350x150");
	        $projet->setCreatedAt(new DateTime('today'));
            $manager->persist($projet);
        }
        $manager->flush();
    }
}
