<?php


    namespace OpStream;

    use acm\acm;
    use mysqli;

    require_once(__DIR__ . DIRECTORY_SEPARATOR . 'AutoConfig.php');

    /**
     * Class OpStream
     * @package OpStream
     */
    class OpStream
    {
        /**
         * @var mysqli
         */
        private $Database;

        /**
         * @var acm
         */
        private $acm;

        /**
         * @var mixed
         */
        private $DatabaseConfiguration;

        /**
         * OpStream constructor.
         * @throws \Exception
         */
        public function __construct()
        {
            $this->acm = new acm(__DIR__, 'OpenBlu');
            $this->DatabaseConfiguration = $this->acm->getConfiguration('Database');

            $this->Database = new mysqli(
                $this->DatabaseConfiguration['Host'],
                $this->DatabaseConfiguration['Username'],
                $this->DatabaseConfiguration['Password'],
                $this->DatabaseConfiguration['Name'],
                $this->DatabaseConfiguration['Port']
            );
        }

        /**
         * @return mixed
         */
        public function getDatabaseConfiguration()
        {
            return $this->DatabaseConfiguration;
        }

        /**
         * @return acm
         */
        public function getAcm(): acm
        {
            return $this->acm;
        }

        /**
         * @return mysqli
         */
        public function getDatabase(): mysqli
        {
            return $this->Database;
        }
    }