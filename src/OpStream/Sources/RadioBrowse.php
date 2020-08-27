<?php


    namespace OpStream\Sources;


    use OpStream\Exceptions\RadioBrowseException;
    use OpStream\Interfaces\SourceInterface;
    use OpStream\Objects\Station;
    use OpStream\Sources\RadioBrowse\SearchOrder;

    /**
     * Class RadioBrowse
     * @package OpStream\Sources
     */
    class RadioBrowse implements SourceInterface
    {
        /**
         * @var string
         */
        private $SourceName = "RadioBrowse";

        /**
         * @var string
         */
        private $SourceURL = "radio-browser.info";

        /**
         * @return Station[]
         */
        public function update(): array
        {
            // TODO: Implement update() method.
        }

        /**
         * Returns the source name
         *
         * @return string
         */
        public function getSourceName(): string
        {
            return $this->SourceName;
        }

        /**
         * Returns the source URL for this source
         *
         * @return string
         */
        public function getSourceURL(): string
        {
            return $this->SourceURL;
        }

        /**
         * Fetches all stations from RadioBrowse
         *
         * @param string|null|SearchOrder $order name of the attribute the result list will be sorted by
         * @param bool $reverse reverse the result list if set to true
         * @param int $offset starting value of the result list from the database. For example, if you want to do paging on the server side.
         * @param int $limit number of returned data rows (stations) starting with offset
         * @return RadioBrowse\Station[]
         * @throws RadioBrowseException
         */
        public function fetchStations(string $order=null, bool $reverse=false, int $offset=0, int $limit=100000): array
        {
            // Prepare parameters
            $parameters = array(
                "reverse" => $reverse,
                "offset" => $offset,
                "limit" => $limit
            );

            if($order !== null)
            {
                $parameters["order"] = $order;
            }

            // Prepare request URL
            $endpoint = "https://nl1.api.radio-browser.info";
            $request_url = $endpoint . "/json/stations?" . http_build_query($parameters);

            // Get cURL resource
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_URL, $request_url);
            curl_setopt($curl, CURLOPT_USERAGENT, 'OpenBlu/1.0 (Library)');
            curl_setopt($curl, CURLOPT_FAILONERROR, true);

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $request_url,
                CURLOPT_USERAGENT => 'OpStream/1.0 (Library)'
            ));

            $Response = curl_exec($curl);
            $Error = curl_error($curl);
            curl_close($curl);

            if($Error)
            {
                throw new RadioBrowseException($Error);
            }

            // Parse the response
            $DecodedResponse = json_decode($Response, true);
            if($DecodedResponse == false)
            {
                throw new RadioBrowseException("JSON Decode error, " . json_last_error_msg());
            }

            $Results = array();
            foreach($DecodedResponse as $value)
            {
                $Results[] = RadioBrowse\Station::fromArray($value);
            }

            return $Results;
        }
    }