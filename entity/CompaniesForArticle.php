<?php
    namespace entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table(name="companiesforarticle")
     */
    class CompaniesForArticle
    {
        /**
         * @var int
         *
         * @ORM\Column(name="ArticleID", type="integer", nullable=false)
         */
        private $articleId;

        /**
         * @var int
         *
         * @ORM\Column(name="CompanyID", type="integer", nullable=false)
         */
        private $companyId;

        /**
         * @return int
         */
        public function getArticleId()
        {
            return $this->articleId;
        }

        /**
         * @param int $articleId
         */
        public function setArticleId($articleId)
        {
            $this->articleId = $articleId;
        }

        /**
         * @return int
         */
        public function getCompanyId()
        {
            return $this->companyId;
        }

        /**
         * @param int $companyId
         */
        public function setCompanyId($companyId)
        {
            $this->companyId = $companyId;
        }
    }
