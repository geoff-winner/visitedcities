<?php
    class Place
    {
        private $city_name;
        private $time_visited;

        function __construct ($city_name, $time_visited)
        {
            $this->city_name = $city_name;
            $this->time_visited = $time_visited;
        }
        function setCityName($city1)
        {
            $this->city_name = (string) $city1;
        }
        function getCityName()
        {
            return $this->city_name;
        }
        function setTimeVisited($time1)
        {
            $this->time_visited = (string) $time1;
        }
        function getTimeVisited()
        {
            return $this->time_visited;
        }
        function save()
        {
            array_push($_SESSION['list_of_cities'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_cities'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_cities'] = array();
        }

}
?>
