<?php

    class Form
    {
        private $title = "お問合わせはこちらから";
        private $name = "名前";
        private $age = "年齢";
        private $sex = array("男", "女");
        private $textArea;
        
        public function getTitle()
        {
            return $this->title;
        }
        
        public function getName()
        {
            return $this->name;
        }
        
        public function getSex($sex)
        {
            return $this->sex[$sex];
        }
        
        public function getAge()
        {
            return $this->age;
        }
    }
