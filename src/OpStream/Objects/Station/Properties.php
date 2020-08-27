<?php


    namespace OpStream\Objects\Station;

    /**
     * Class Properties
     * @package OpStream\Objects\Station
     */
    class Properties
    {
        /**
         * Returns an array which represents this objects
         *
         * @return array
         * @noinspection PhpUnused
         */
        public function toArray(): array
        {
            return array();
        }

        /**
         * Constructs object from array
         *
         * @param array $data
         * @return Properties
         * @noinspection PhpUnused
         */
        public static function fromArray(array $data): Properties
        {
            $PropertiesObject = new Properties();


            return $PropertiesObject;
        }
    }