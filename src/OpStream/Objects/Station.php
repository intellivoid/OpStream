<?php /** @noinspection PhpUnused */


    namespace OpStream\Objects;

    use OpStream\Abstracts\Codecs;
    use OpStream\Objects\Station\Properties;
    use OpStream\Objects\Station\Statistics;

    /**
     * Class Station
     * @package OpStream\Objects
     */
    class Station
    {
        /**
         * Unique Internal Database ID of the record
         *
         * @var int
         */
        public $ID;

        /**
         * The Public ID of the radio station
         *
         * @var string
         */
        public $PublicID;

        /**
         * The name of the Radio Station
         *
         * @var string
         */
        public $Name;

        /**
         * The base URL of the radio station
         *
         * @var string|null
         */
        public $URL;

        /**
         * The URL of the radio station's homepage
         *
         * @var string|null
         */
        public $Homepage;

        /**
         * The URL of the radio station's icon
         *
         * @var string|null
         */
        public $ImageURL;

        /**
         * The direct URL for streaming the radio station
         *
         * @var string
         */
        public $StreamURL;

        /**
         * The languages associated with this radio station
         *
         * @var string[]
         */
        public $Language;

        /**
         * The primary language of the radio station
         *
         * @var string|null
         */
        public $PrimaryLanguage;

        /**
         * The secondary language of the radio station
         *
         * @var string|null
         */
        public $SecondaryLanguage;

        /**
         * The origin country of this radio station
         *
         * @var string|null
         */
        public $Country;

        /**
         * The country code of the origin country of this radio station
         *
         * @var string|null
         */
        public $CountryCode;

        /**
         * Array of tags related to this radio station
         *
         * @var string[]
         */
        public $Tags;

        /**
         * The primary tag of the radio station
         *
         * @var string|null
         */
        public $PrimaryTag;

        /**
         * The secondary tag of the radio station
         *
         * @var string|null
         */
        public $SecondaryTag;

        /**
         * The codec type of the stream
         *
         * @var string|Codecs
         */
        public $Codec;

        /**
         * The detected bitrate of the stream
         *
         * @var int|null
         */
        public $Bitrate;

        /**
         * Indicates if this radio station is available or broken
         *
         * @var bool
         */
        public $Available;

        /**
         * The radio station statistics information
         *
         * @var Statistics
         */
        public $Statistics;

        /**
         * The radio station record properties
         *
         * @var Properties
         */
        public $Properties;

        /**
         * The Unix Timestamp of when this radio station was last updated
         *
         * @var int
         */
        public $LastUpdatedTimestamp;

        /**
         * The Unix Timestamp of when this radio station record was created
         *
         * @var int
         */
        public $CreatedTimestamp;

        /**
         * Station constructor.
         */
        public function __construct()
        {
            $this->Statistics = new Statistics();
            $this->Properties = new Properties();
        }

        /**
         * Returns an array which represents this station
         *
         * @return array
         * @noinspection PhpUnused
         */
        public function toArray(): array
        {
            return array(
                "id" => $this->ID,
                "public_id" => $this->PublicID,
                "name" => $this->Name,
                "url" => $this->URL,
                "homepage" => $this->Homepage,
                "image_url" => $this->ImageURL,
                "stream_url" => $this->StreamURL,
                "language" => $this->Language,
                "country" => $this->Country,
                "country_code" => $this->CountryCode,
                "tags" => $this->Tags,
                "primary_tag" => $this->PrimaryTag,
                "secondary_tag" => $this->SecondaryTag,
                "codec" => $this->Codec,
                "bitrate" => $this->Bitrate,
                "available" => $this->Available,
                "statistics" => $this->Statistics->toArray(),
                "properties" => $this->Properties->toArray(),
                "last_updated_timestamp" => $this->LastUpdatedTimestamp,
                "created_timestamp" => $this->CreatedTimestamp
            );
        }

        /**
         * Constructs object from array
         *
         * @param array $data
         * @return Station
         * @noinspection PhpUnused
         */
        public static function fromArray(array $data): Station
        {
            $StationObject = new Station();

            if(isset($data["id"]))
            {
                $StationObject->ID = $data["id"];
            }

            if(isset($data["public_id"]))
            {
                $StationObject->PublicID = $data["public_id"];
            }

            if(isset($data["name"]))
            {
                $StationObject->Name = $data["name"];
            }

            if(isset($data["url"]))
            {
                $StationObject->URL = $data["url"];
            }

            if(isset($data["homepage"]))
            {
                $StationObject->Homepage = $data["homepage"];
            }

            if(isset($data["image_url"]))
            {
                $StationObject->ImageURL = $data["image_url"];
            }

            if(isset($data["stream_url"]))
            {
                $StationObject->StreamURL = $data["stream_url"];
            }

            if(isset($data["language"]))
            {
                $StationObject->Language = $data["language"];
            }

            if(isset($data["primary_language"]))
            {
                $StationObject->PrimaryLanguage = $data["primary_language"];
            }

            if(isset($data["secondary_language"]))
            {
                $StationObject->SecondaryLanguage = $data["secondary_language"];
            }

            if(isset($data["country"]))
            {
                $StationObject->Country = $data["country"];
            }

            if(isset($data["country_code"]))
            {
                $StationObject->CountryCode = $data["country_code"];
            }

            if(isset($data["tags"]))
            {
                $StationObject->Tags = $data["tags"];
            }

            if(isset($data["primary_tag"]))
            {
                $StationObject->PrimaryTag = $data["primary_tag"];
            }

            if(isset($data["secondary_tag"]))
            {
                $StationObject->SecondaryTag = $data["secondary_tag"];
            }

            if(isset($data["codec"]))
            {
                $StationObject->Codec = $data["codec"];
            }

            if(isset($data["bitrate"]))
            {
                $StationObject->Bitrate = $data["bitrate"];
            }

            if(isset($data["available"]))
            {
                $StationObject->Available = (bool)$data["available"];
            }
            else
            {
                $StationObject->Available = false;
            }

            if(isset($data["statistics"]))
            {
                $StationObject->Statistics = Statistics::fromArray($data["statistics"]);
            }

            if(isset($data["properties"]))
            {
                $StationObject->Properties = Properties::fromArray($data["properties"]);
            }

            if(isset($data["last_updated_timestamp"]))
            {
                $StationObject->LastUpdatedTimestamp = (int)$data["last_updated_timestamp"];
            }

            if(isset($data["created_timestamp"]))
            {
                $StationObject->CreatedTimestamp = (int)$data["created_timestamp"];
            }

            return $StationObject;
        }
    }