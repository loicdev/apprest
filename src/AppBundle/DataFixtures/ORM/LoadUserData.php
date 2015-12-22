<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData implements FixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     *
     */
    public function load(ObjectManager $manager)
    {
        $toto = new User();
        $toto->setFirstName('toto');
        $toto->setEmail('toto@toto.org');
        $toto->setAdresse('12 toto rue des entrepreneurs 75015 Paris');
        $toto->setTelephone('1234567898');

        $titi  = new User();
        $titi->setFirstName('titi');
        $titi->setEmail('titi@titi.org');
        $titi->setAdresse('11 titi rue des entrepreneurs 75015 Paris');
        $titi->setTelephone('1234567898');


        $manager->persist($toto);
        $manager->persist($titi);

        $manager->flush();
    }

}