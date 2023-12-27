<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\City;
use AppBundle\Entity\Person;
use AppBundle\Entity\PersonFriend;
use AppBundle\Entity\Visit;

class PopulateDataCommand extends ContainerAwareCommand
{
    private $_em;
    private $_socialData = array(
        array(
            'id' => 1,
            'firstName' => 'Paul',
            'surname' => 'Crowe',
            'age' => 28,
            'gender' => 'male',
            'connections' => array(2),
            'cities' => array('Dublin' => 80, 'New York' => 100, 'Paris' => 95, 'Madrid' => 100, 'London' => 80, 'Barcelona' => 100, 'Moscow' => 20)
        ),
        array(
            'id' => 2,
            'firstName' => 'Rob',
            'surname' => 'Fitz',
            'age' => 23,
            'gender' => 'male',
            'connections' => array(1, 3),
            'cities' => array('Dublin' => 40, 'New York' => 100, 'Paris' => 65, 'Madrid' => 90)
        ),
        array(
            'id' => 3,
            'firstName' => 'Ben',
            'surname' => "O'Carolan",
            'age' => null,
            'gender' => 'male',
            'connections' => array(2, 4, 5, 7),
            'cities' => array('Paris' => 90, 'Madrid' => 40, 'London' => 85, 'Barcelona' => 90, 'Moscow' => 80)
        ),
        array(
            'id' => 4,
            'firstName' => 'Victor',
            'surname' => '',
            'age' => 28,
            'gender' => 'male',
            'connections' => array(3),
            'cities' => array('Paris' => 80, 'Madrid' => 80, 'London' => 80, 'Barcelona' => 80, 'Moscow' => 40)
        ),
        array(
            'id' => 5,
            'firstName' => 'Peter',
            'surname' => 'Mac',
            'age' => 29,
            'gender' => 'male',
            'connections' => array(3, 6, 11, 10, 7),
            'cities' => array('Dublin' => 60, 'New York' => 100, 'Paris' => 75)
        ),
        array(
            'id' => 6,
            'firstName' => 'John',
            'surname' => 'Barry',
            'age' => 18,
            'gender' => 'male',
            'connections' => array(5),
            'cities' => array('London' => 80)
        ),
        array(
            'id' => 7,
            'firstName' => 'Sarah',
            'surname' => 'Lane',
            'age' => 30,
            'gender' => 'female',
            'connections' => array(3, 5, 20, 12, 8),
            'cities' => array('New York' => 100, 'Chicago' => 70)
        ),
        array(
            'id' => 8,
            'firstName' => 'Susan',
            'surname' => 'Downe',
            'age' => 28,
            'gender' => 'female',
            'connections' => array(7),
            'cities' => array('Chicago' => 70, 'Dublin' => 80)
        ),
        array(
            'id' => 9,
            'firstName' => 'Jack',
            'surname' => 'Stam',
            'age' => 28,
            'gender' => 'male',
            'connections' => array(12),
            'cities' => array('Chicago' => 70)
        ),
        array(
            'id' => 10,
            'firstName' => 'Amy',
            'surname' => 'Lane',
            'age' => 24,
            'gender' => 'female',
            'connections' => array(5, 11),
            'cities' => array('Paris' => 95, 'Barcelona' => 80, 'Moscow' => 100)
        ),
        array(
            'id' => 11,
            'firstName' => 'Sandra',
            'surname' => 'Phelan',
            'age' => 28,
            'gender' => 'female',
            'connections' => array(5, 10, 19, 20),
            'cities' => array('Dublin' => 75, 'Chicago' => 60, 'Moscow' => 70)
        ),
        array(
            'id' => 12,
            'firstName' => 'Laura',
            'surname' => 'Murphy',
            'age' => 33,
            'gender' => 'female',
            'connections' => array(7, 9, 13, 20),
            'cities' => array('Dublin' => 75, 'Moscow' => 75)
        ),
        array(
            'id' => 13,
            'firstName' => 'Lisa',
            'surname' => 'Daly',
            'age' => 28,
            'gender' => 'female',
            'connections' => array(12, 14, 20),
            'cities' => array('Dublin' => 80)
        ),
        array(
            'id' => 14,
            'firstName' => 'Mark',
            'surname' => 'Johnson',
            'age' => 28,
            'gender' => 'male',
            'connections' => array(13, 15),
            'cities' => array('Dublin' => 80, 'New York' => 90, 'Moscow' => 50)
        ),
        array(
            'id' => 15,
            'firstName' => 'Seamus',
            'surname' => 'Crowe',
            'age' => 24,
            'gender' => 'male',
            'connections' => array(14),
            'cities' => array()
        ),
        array(
            'id' => 16,
            'firstName' => 'Daren',
            'surname' => 'Slater',
            'age' => 28,
            'gender' => 'male',
            'connections' => array(18, 20),
            'cities' => array('Paris' => 95, 'Chicago' => 80, 'Moscow' => 20)
        ),
        array(
            'id' => 17,
            'firstName' => 'Dara',
            'surname' => 'Zoltan',
            'age' => 48,
            'gender' => 'male',
            'connections' => array(18, 20),
            'cities' => array('Moscow' => 30)
        ),
        array(
            'id' => 18,
            'firstName' => 'Marie',
            'surname' => 'D',
            'age' => 28,
            'gender' => 'female',
            'connections' => array(17),
            'cities' => array('Chicago' => 30)
        ),
        array(
            'id' => 19,
            'firstName' => 'Catriona',
            'surname' => 'Long',
            'age' => 28,
            'gender' => 'female',
            'connections' => array(11, 20),
            'cities' => array('Chicago' => 40)
        ),
        array(
            'id' => 20,
            'firstName' => 'Katy',
            'surname' => 'Couch',
            'age' => 28,
            'gender' => 'female',
            'connections' => array(7, 11, 12, 13, 16, 17, 19),
            'cities' => array('Dublin' => 90, 'London' => 90)
        )
    );


    protected function configure()
    {   
        $this
            ->setName('sg:populate-database')
            ->setDescription('Populate DataBase with people')
        ;
    }

    /**
     * {@inheritdoc}
    */

    protected function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln('['.date('d-m-Y H:i:s').'] Start populating DB');

        $this->_em = $this->getContainer()->get('doctrine')->getManager();

        foreach($this->_socialData as $el) {
            if($this->get_el_if_exist('id', $el['id'], 'Person') == false) {
                //saving person
                $person = new Person();
                $person->setId($el['id']);
                $person->setName($el['firstName']);
                $person->setSurname($el['surname']);
                $person->setAge($el['age']);
                $person->setGender($el['gender']);
                $this->save_to_db($person);
            };
            
            foreach($el['cities'] as $name=>$city) {
                if($this->get_el_if_exist('name', $name, 'City') == false) {
                    $new_city = new City();
                    $new_city->setName($name);
                    if( $name == "New York" || $name == "Chicago") {
                        $new_city->setCountry('USA');
                    };
                    if( $name == "London") {
                        $new_city->setCountry('England');
                    };
                    if( $name == "Barcelona" || $name == "Madrid") {
                        $new_city->setCountry('Spain');
                    };
                    if( $name == "Dublin") {
                        $new_city->setCountry('Ireland');
                    };
                    if( $name == "Paris") {
                        $new_city->setCountry('France');
                    };
                    if( $name == "Moscow") {
                        $new_city->setCountry('Russia');
                    };
                    $this->save_to_db($new_city);
                }
                $new_city = $this->get_el_if_exist('name', $name, 'City');
                $person = $this->get_el_if_exist('id', $el['id'], 'Person');

                if($this->check_relation_el_existance('city_id', $new_city->getId(), 'person_id', $person->getId(), 'Visit') == false) {
                    $visit = new Visit();
                    $visit->setCityId($new_city);
                    $visit->setVisitPercent($city);
                    $visit->setPersonId($person);
                    $this->save_to_db($visit);
                }
                

            };
        };
        $output->writeln("[".date('d-m-Y H:i:s')."] Populated Person, Visit and City tables");

        foreach($this->_socialData as $el) {
            $person = $this->get_el_if_exist('id', $el['id'], 'Person');
            foreach($el['connections'] as $p_id) {
                
                $personfriends = new PersonFriend();
                $personfriends->setFriendId($person);
                $friend = $this->get_el_if_exist('id', $p_id, 'Person');
                $personfriends->setPersonId($friend);
                
                if($this->check_relation_el_existance('friend_id', $person->getId(), 'person_id', $friend->getId(), 'PersonFriend') == false) {
                    $this->save_to_db($personfriends);
                }
            };
        };
        $output->writeln("[".date('d-m-Y H:i:s')."] Populated PersonFriend tables");

        $output->writeln("[".date('d-m-Y H:i:s')."] Populating complete!");
    }

    protected function get_el_if_exist($key, $value, $db_tbl) {
        $this->_em = $this->getContainer()->get('doctrine')->getManager();
        $el = $this->_em->getRepository('AppBundle:'.$db_tbl)->findOneBy([$key => $value]);
        if(isset($el)) {
            return $el;
        } else {
            return false;
        }
    }

    protected function check_relation_el_existance($key1, $value1, $key2, $value2, $db_tbl) {
        $this->_em = $this->getContainer()->get('doctrine')->getManager();
        $el = $this->_em->getRepository('AppBundle:'.$db_tbl)->findOneBy([$key1 => $value1 , $key2 => $value2]);
        if(isset($el)) {
            return $el;
        } else {
            return false;
        }
    }

    protected function save_to_db($el) {
        $this->_em = $this->getContainer()->get('doctrine')->getManager();
        $this->_em->persist($el);
        $this->_em->flush();

    }
}
