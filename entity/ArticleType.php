<?php
    namespace entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table(name="articletype")
     */
    class ArticleType
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
         * @ORM\Column(name="Description", type="string", lenght="45", nullable=false)
         */
        private $description;

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
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }
    }
