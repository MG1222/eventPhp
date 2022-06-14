<?php

namespace App\Controllers;

use Library\Core\AbstractModel;

class EventController extends AbstractModel
{
    private string $titleEvent ;
    private string $descriptionEvent;
    private string $locationEvent;
    private $imageEvent;
    private int $user_id;

    public function getResults(): array {
        return $this->db->getResults('SELECT * FROM categories');
    }

    public function __construct($titleEvent, $descriptionEvent, $locationEvent, $imageEvent, $user_id) {
        $this->titleEvent = $titleEvent;
        $this->descriptionEvent = $descriptionEvent;
        $this->locationEvent = $locationEvent;
        $this->imageEvent = $imageEvent;
        $this->user_id = $user_id;
    }

    public function setTitleEvent($titleEvent): void {
        $this->titleEvent = $titleEvent;
    }
    public function getTitleEvent(): string {
        return $this->titleEvent;
    }
//----------------------------------------------------------------
    public function setDescriptionEvent($descriptionEvent): void {
        $this->descriptionEvent = $descriptionEvent;
    }
    public function getDescriptionEvent(): string  {
        return $this->descriptionEvent;
    }
//------------------------------------------------------------------
    public function setLocationEvent($locationEvent): void {
        $this->locationEvent = $locationEvent;
    }
    public function getLocationEvent(): string  {
        return $this->locationEvent;
    }
//------------------------------------------------------------------
    public function setImageEvent($imageEvent): void {
        $this->imageEvent = $imageEvent;
    }
    public function getImageEvent() {
        return $this->imageEvent;
    }
//------------------------------------------------------------------
    public function setUser_id($user_id): void {
        $this->user_id = $user_id;
    }
    public function getUser_id(): int {
        return $this->user_id;
    }
//------------------------------------------------------------------
}