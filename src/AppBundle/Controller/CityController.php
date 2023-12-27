<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class CityController extends Controller
{
    
    /**
    * @Route("/persons/cities/suggestions/{id}", name="cities_suggestions_url", defaults={"id" = ""})
    */

    public function cities_suggestions($id) {
       $em = $this->getDoctrine()->getManager();
       $person_id = $id;
       $cities_id_suggested = $em->getRepository('AppBundle:City')->getCitiesSuggestion($person_id);
       $cities_data = [];
       
       foreach($cities_id_suggested as $city_id) {
           $city = $em->getRepository('AppBundle:City')->find($city_id['city_id']);
           $num = rand(1, 70);
           $img_url = "https://picsum.photos/id/".$num."/200/300";
           $data = [
               "id" => $city->getId(),
               "name" => $city->getName(),
               "visit_percent" => intval($city_id['visit_percent']),
               "img" => $img_url
           ];
           array_push($cities_data, $data);
       };
       return $this->render('@App/suggested_cities.html.twig', 
           [
               "cities" => $cities_data,
               "person_id" => $person_id
           ]
       );
    }

    /**
    * @Route("/persons/cities/cities_names", name="cities_names")
    */

    public function cities_names() {
        $em = $this->getDoctrine()->getManager();
        $city_names = [];
        $cities_stats = $em->getRepository('AppBundle:City')->getCitiesStats();
        foreach($cities_stats as $city) {
            $city = $em->getRepository('AppBundle:City')->find($city['city_id']);
            $city_name = $city->getName();
            array_push($city_names, $city_name);
        };

        return new JsonResponse(array("city_names" => $city_names));
    }


    /**
    * @Route("/persons/cities/general_stats", name="cities_general_stats_url")
    */

    public function cities_general_stats() {
        $em = $this->getDoctrine()->getManager();

        $cities_stats = $em->getRepository('AppBundle:City')->getCitiesStats();
        $city_ratings = [];
        $city_visits = [];

        foreach($cities_stats as $city_stat) {
            $stars = intval(round(($city_stat['visit_percent'] / 10)));
            array_push($city_ratings, $stars);
            array_push($city_visits, intval($city_stat['num_visit']));
        };
        
        return new JsonResponse(array(
            "ratings" => $city_ratings,
            "visits" => $city_visits
        ));
    }

    /**
    * @Route("/persons/cities/countries_stats", name="cities_countries_stats_url")
    */
    
    public function cities_countries_stats() {
        $em = $this->getDoctrine()->getManager();

        $countries_stats = $em->getRepository('AppBundle:City')->getCountriesStats();
        $country_rating = [];
        $country_visits = [];
        foreach($countries_stats as $country_stats) {
            $stars = intval(round(($country_stats['visit_percent'] / 10)));
            array_push($country_rating, $stars);
            array_push($country_visits, intval($country_stats['num_visit']));
        };
        
        return new JsonResponse(array(
            "rating" => $country_rating,
            "visits" => $country_visits
        ));
    }

    /**
    * @Route("/persons/cities/countries_names", name="cities_countries_names_url")
    */

    public function cities_countries_names() {
        $em = $this->getDoctrine()->getManager();
        $countries_stats = $em->getRepository('AppBundle:City')->getCountriesStats();
        $country_names = [];

        foreach($countries_stats as $country_stats) {
            array_push($country_names, $country_stats['country']);
        };

        return new JsonResponse(array("country_names" => $country_names));
    }
}
