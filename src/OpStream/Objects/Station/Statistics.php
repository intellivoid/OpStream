<?php


    namespace OpStream\Objects\Station;

    /**
     * Class Statistics
     * @package OpStream\Objects\Station
     */
    class Statistics
    {
        /**
         * The amount of clicks this radio station gets
         *
         * @var int
         */
        public $Clicks;

        /**
         * Returns an array which represents this object
         *
         * @return array
         * @noinspection PhpUnused
         */
        public function toArray(): array
        {
            return array(
                "clicks" => $this->Clicks
            );
        }

        /**
         * Constructs object from an array
         *
         * @param array $data
         * @return Statistics
         * @noinspection PhpUnused
         */
        public static function fromArray(array $data): Statistics
        {
            $StatisticsObject = new Statistics();

            if(isset($data["clicks"]))
            {
                $StatisticsObject->Clicks = $data["clicks"];
            }

            return $StatisticsObject;
        }
    }