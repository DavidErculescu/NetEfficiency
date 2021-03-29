<?php
    namespace entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table(name="company")
     */
    class Company
    {
        /**
         * @var int
         *
         * @ORM\Column(name="keyid", type="integer", nullable=false)
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $keyId;

        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", lenght="70", nullable=true)
         */
        private $name;

        /**
         * @return int
         */
        public function getKeyId()
        {
            return $this->keyId;
        }

        /**
         * @param int $keyId
         */
        public function setKeyId($keyId)
        {
            $this->keyId = $keyId;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }
    }
