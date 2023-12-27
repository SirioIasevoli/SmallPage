<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PersonController extends Controller
{
    /**
     * @Route("/", name="homepage_url")
     */
    public function homepage()
    {
        return $this->redirectToRoute('persons_url');
    }

    /**
     * @Route("/persons/", name="persons_url")
     */

     public function persons() {
        $em = $this->getDoctrine()->getManager();
        $person_list = $em->getRepository('AppBundle:Person')->findAll();
        
        $persons = [];
        foreach($person_list as $person) {
            $id = $person->getId();
            $name = $person->getName();
            $surname = $person->getSurname();
            $data = [
                'id' => $id,
                'name' => $name,
                'surname' => $surname,
            ];
            array_push($persons, $data);
        }
        
        return $this->render('@App/homepage.html.twig', ["persons" => $persons]);
     }

     /**
     * @Route("/persons/statistic/", name="persons_statistic_url")
     */

     public function persons_statistic(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $person_id = $_GET['id'];
        $visit_data = [];
        $friends_data = [];
        
        $person = $em->getRepository('AppBundle:Person')->find($person_id);
        $visits = $person->getVisitsPerson();
        $friends = $person->getHasFriends();

        $person_data = [
            'id' => $person->getId(),
            'name' => $person->getName(),
            'surname' => $person->getSurname(),
            'age' => $person->getAge(),
            'gender' => $person->getGender(),
        ];
        

        foreach($visits as $visit) {
            $percentage = $visit->getVisitPercent();
            $city_name = $visit->getCityId()->getName();

            $city_data = [
                'percentage' => $percentage,
                'city_name' => $city_name
            ];
            array_push($visit_data, $city_data);
        };

        foreach($friends as $friend) {
            $person_friend_id = $friend->getPersonId()->getId();
            $person_friend = $em->getRepository('AppBundle:Person')->find($person_friend_id);

            $friend_data = [
                'id' =>  $person_friend->getId(),
                'name' => $person_friend->getName(),
                'surname' => $person_friend->getSurname(),
                'age' => $person_friend->getAge(),
                'gender' => $person_friend->getGender(),
            ];

            array_push($friends_data, $friend_data);
        };
        
        return new JsonResponse(array(
            'person' => $person_data,
            'visit_data' => $visit_data,
            'friends_data' => $friends_data
        ));
     }

      /**
     * @Route("/persons/friends/suggestions/{id}", name="friends_suggestions_url", defaults={"id" = ""})
     */
     public function friend_suggestions($id) {
        $em = $this->getDoctrine()->getManager();
        $person_id = $id;
        $friends_suggested = [];
        $friends_of_friends = [];
        $data_friends_suggested = [];
        $data_close_friends = [];
        $common_friend_id = [];

        $friends_sugg_id = $em->getRepository('AppBundle:Person')->getFriendsSuggestion($person_id);
        $friends_of_friends_id = $em->getRepository('AppBundle:Person')->getFriendsofFriends($person_id);
        $friends = array_map("unserialize", array_unique(array_map("serialize", $friends_sugg_id))); 
        $close_friends = array_map("unserialize", array_diff_assoc(array_map("serialize", $friends_sugg_id), array_map("serialize", $friends)));
        
        foreach($close_friends as $friend) {
            $val = $friend['person_id'];
            array_push($common_friend_id, $val);
        };
        

        foreach($friends as $friend) { 
            if(!in_array($friend['person_id'], $common_friend_id)) {
                array_push($friends_suggested, $friend);
            }
        };
        

        foreach($friends_suggested as $el) {
            $friend = $em->getRepository('AppBundle:Person')->find($el['person_id']);
            $data = [
                "id" => $friend->getId(),
                "name" => $friend->getName(),
                "surname" => $friend->getSurname(),
                "age" => $friend->getAge(),
                "gender" => $friend->getGender()
            ];
            array_push($data_friends_suggested, $data);
        };
        foreach($close_friends as $el) {
            $friend = $em->getRepository('AppBundle:Person')->find($el['person_id']);
            $data = [
                "id" => $friend->getId(),
                "name" => $friend->getName(),
                "surname" => $friend->getSurname(),
                "age" => $friend->getAge(),
                "gender" => $friend->getGender()
            ];
            array_push($data_close_friends, $data);
        };
        foreach($friends_of_friends_id as $id) {
            $friend = $em->getRepository('AppBundle:Person')->find($id['person_id']);
            $data = [
                "id" => $friend->getId(),
                "name" => $friend->getName(),
                "surname" => $friend->getSurname(),
                "age" => $friend->getAge(),
                "gender" => $friend->getGender()
            ];
            array_push($friends_of_friends, $data);
        };

        return $this->render('@App/suggested_friends.html.twig', 
            [
                "close_friends" => $data_close_friends,
                "friends" => $data_friends_suggested,
                "friends_of_friends" => $friends_of_friends,
                "person_id" => $person_id
            ]
        );
     }
    
    /**
    * @Route("/persons/charts", name="charts_url")
    */

    public function charts() {
        return $this->render('@App/chart.html.twig');
    }

    /**
    * @Route("/persons/persons/general_stats", name="persons_general_stats_url")
    */
    
    public function persons_general_stats() {
        $em = $this->getDoctrine()->getManager();

        $persons_stats = $em->getRepository('AppBundle:Person')->getPeopleStats();
        $people_friends = [];
        foreach($persons_stats as $person_stat) {
            array_push($people_friends, intval($person_stat['num_friends']));
        };
        return new JsonResponse(array("friends" => $people_friends));
    }

    /**
    * @Route("/persons/persons/people_names", name="people_names_url")
    */
    
    public function people_names() {
        $em = $this->getDoctrine()->getManager();

        $persons_stats = $em->getRepository('AppBundle:Person')->getPeopleStats();
        $people_names = [];
        foreach($persons_stats as $person_stat) {
            $person = $em->getRepository('AppBundle:Person')->find($person_stat['friend_id']);
            $person_name = $person->getName();
            $person_surname = $person->getSurname();
            
            array_push($people_names, $person_name. " ". $person_surname);
        };
        return new JsonResponse(array("people_names" => $people_names));
    }
}
