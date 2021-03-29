<?php
    namespace entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table(name="articles")
     */
    class Article
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
         * @ORM\Column(name="Title", type="string", lenght="200", nullable=false)
         */
        private $title;

        /**
         * @var string
         *
         * @ORM\Column(name="Text", type="string", nullable=true)
         */
        private $text;

        /**
         * @var \DateTime|null
         *
         * @ORM\Column(name="CreationDate", type="datetime", nullable=true)
         */
        private $creationDate;

        /**
         * @var \DateTime|null
         *
         * @ORM\Column(name="LiveDate", type="datetime", nullable=true)
         */
        private $liveDate;

        /**
         * @var int
         *
         * @ORM\Column(name="ArticleTypeID", type="integer", nullable=false)
         */
        private $articleTypeId;

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
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param string $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @return string
         */
        public function getText()
        {
            return $this->text;
        }

        /**
         * @param string $text
         */
        public function setText($text)
        {
            $this->text = $text;
        }

        /**
         * @return \DateTime|null
         */
        public function getCreationDate()
        {
            return $this->creationDate;
        }

        /**
         * @param \DateTime|null $creationDate
         */
        public function setCreationDate($creationDate)
        {
            $this->creationDate = $creationDate;
        }

        /**
         * @return \DateTime|null
         */
        public function getLiveDate()
        {
            return $this->liveDate;
        }

        /**
         * @param \DateTime|null $liveDate
         */
        public function setLiveDate($liveDate)
        {
            $this->liveDate = $liveDate;
        }

        /**
         * @return int
         */
        public function getArticleTypeId()
        {
            return $this->articleTypeId;
        }

        /**
         * @param int $articleTypeId
         */
        public function setArticleTypeId($articleTypeId)
        {
            $this->articleTypeId = $articleTypeId;
        }
    }
