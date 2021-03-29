<?php
    namespace entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Table(name="option")
     */
    class Option
    {
        /**
         * @var int
         *
         * @ORM\Column(name="id", type="integer", nullable=false)
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @var string
         *
         * @ORM\Column(name="name", type="string", lenght="32", nullable=false)
         */
        private $name;

        /**
         * @var string
         *
         * @ORM\Column(name="value", type="string", lenght="32", nullable=true)
         */
        private $value;

        /**
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param int $id
         */
        public function setId($id)
        {
            $this->id = $id;
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

        /**
         * @return string
         */
        public function getValue()
        {
            return $this->value;
        }

        /**
         * @param string $value
         */
        public function setValue($value)
        {
            $this->value = $value;
        }
    }
