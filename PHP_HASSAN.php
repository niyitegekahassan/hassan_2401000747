<?php
// Elyse Igiraneza's Intro Script with age stored but not shown

class Person {
    public $name;
    public $age; // Age is stored, but not displayed
    public $nationality;
    public $university;
    public $fieldOfStudy;
    public $location;
    public $hobbies = [];
    public $careerGoals = [];
    public $hasTeam;

    public function __construct($name, $age, $nationality, $university, $fieldOfStudy, $location) {
        $this->name = $name;
        $this->age = $age; // Age is saved here
        $this->nationality = $nationality;
        $this->university = $university;
        $this->fieldOfStudy = $fieldOfStudy;
        $this->location = $location;
    }

    public function addHobby($hobby) {
        $this->hobbies[] = $hobby;
    }

    public function addCareerGoal($goal) {
        $this->careerGoals[] = $goal;
    }

    public function setfootballPosition($position) {
        $this->position = $position;
    }

    public function setTeamStatus($hasTeam) {
        $this->hasTeam = $hasTeam;
    }

    public function introduce() {
        echo "<p>Hello! My name is <strong>{$this->name}</strong>.</p>";
        echo "<p>I'm a {$this->nationality} student at <strong>{$this->university}</strong>, studying <strong>{$this->fieldOfStudy}</strong> in {$this->location}.</p>";

        if (!empty($this->hobbies)) {
            echo "<p>I enjoy: <em>" . implode(', ', $this->hobbies) . "</em>.</p>";
        }

        if (!empty($this->careerGoals)) {
            echo "<p>My goals include: <em>" . implode(', ', $this->careerGoals) . "</em>.</p>";
        }

        if (!empty($this->position)) {
            echo "<p>I play as a <strong>{$this->position}</strong> in football.</p>";
        }

        if (isset($this->hasTeam)) {
            echo $this->hasTeam ? "<p>I currently play for a team.</p>" : "<p>I currently do not have a football team to play in.</p>";
        }

        echo "<p>glad to see you!</p>";
    }
}

// Create an instance for Elyse
$elyse = new Person("niyitegeka hassan", 23, "Black", "University of Kigali", "Information Technology", "the UK");
$elyse->addHobby("playing footall");
$elyse->addHobby("entrepreneur");

$elyse->addCareerGoal("get big in finance");
$elyse->addCareerGoal("becoming an big compay enterprise");

$elyse->setfootballPosition("striker");
$elyse->setTeamStatus(false); // false = doesn't have a team currently

$elyse->introduce();
?>