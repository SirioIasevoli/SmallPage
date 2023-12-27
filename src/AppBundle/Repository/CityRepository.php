<?php

namespace AppBundle\Repository;

/**
 * CityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CityRepository extends \Doctrine\ORM\EntityRepository
{

    public function getCitiesSuggestion($id) {
        $em = $this->getEntityManager();
        
        
        $query = "
            SELECT city_id, AVG(visit_percent) as visit_percent
            FROM visit
            WHERE visit.person_id IN (
                    SELECT DISTINCT person_friend.person_id
            
                    FROM person_friend

                    WHERE friend_id = :id    
                )
                AND city_id NOT IN (
                    SELECT city_id
                    FROM visit
                    WHERE visit.person_id =:id
                )
            GROUP BY city_id
            ORDER BY visit_percent DESC
        ";
        $statement= $em->getConnection()->prepare($query);
        $statement->bindValue('id', $id);
        $statement->execute();
        $result = $statement->fetchAll();  
        
        return $result;
    }

    public function getCitiesStats() {
        $em = $this->getEntityManager();

        $query = "
            SELECT city_id,
                AVG(visit_percent) AS visit_percent,
                COUNT(person_id) AS num_visit
            
            FROM visit
            GROUP BY city_id
            ORDER BY visit_percent DESC, num_visit DESC
        ";
        $statement= $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }
    public function getCountriesStats() {
        $em = $this->getEntityManager();
        $query = "
            SELECT DISTINCT city.country,
                AVG(visit_percent) AS visit_percent,
                COUNT(person_id) AS num_visit
            FROM visit
                LEFT JOIN city ON city.id = visit.city_id
            GROUP BY city.country
            ORDER BY visit_percent DESC, num_visit DESC
        ";
        $statement= $em->getConnection()->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();

        return $result;
    }
}