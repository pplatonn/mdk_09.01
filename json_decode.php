<?php
$json = '{
    "cookingBreakfast": true,
    "cleaningKitchen": true,
    "ironing": false,
    "gaming": true,
    "washingDishes": true,
    "cleaningBath": false,
    "cleaningRoom": false,
    "cookingDinner": true,
    "cookingLunch": true,
    "walkingDog": true,
    "coding": false,
    "paintingFence": false,
    "readingBook": true,
    "dustingShelves": false,
    "shopping": true,
    "wateringPlants": false,
    "takingOutTrash": true,
    "makingBed": false
}';

class CheckUndoneTasks
{
    private $tasks;
    function __construct($tasks)
    {
        $this->tasks = $tasks;
    }

    public function returnUndoneTasks () {
        $decodedJson = json_decode($this->tasks, true);
        foreach ($decodedJson as $key => $value) {
            if ($value == 0) {
                echo "$key is undone" . "<br>";
            }
        }
    }
}

$myTasks = new CheckUndoneTasks($json);
$myTasks->returnUndoneTasks();
