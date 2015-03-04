<?php
    class Place
    {
        private $city_name;

        function __construct ($city_name)
        {
            $this->city_name = $city_name;
        }
        function setCityName($city1)
        {
            $this->city_name = (string) $city1;
        }
        function getCityName()
        {
            return $this->city_name;
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
