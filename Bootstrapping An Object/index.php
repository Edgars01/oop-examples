<?php

class Video {

    public $type;
    public $duration;
    public $published = false;
    public $title;
    
    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }
    
    public function play()
    {
        return $this->published ? "The video is playing" : "This video is not yet available";
    }
    
    public function pause()
    {
        return $this->published ? 'The video is paused':"";
    }
    
    public function __destruct()
    {
        var_dump('Destroying instance of '. get_class());
    }
}

//header('Content-Type:text/plain', true);
$introduction = new Video('mp4', 10.5, 'Introduction to OOP');

var_dump($introduction);

