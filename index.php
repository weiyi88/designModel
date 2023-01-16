<?php
namespace observer;

require "./EventGenerator/EventGenerator.php";
require "./Observer/Observer.php";

use observer\EventGenerator\EventGenerator;
use observer\Observer\Observer;

class Event  extends EventGenerator {

    function trigger(){
        echo "Event done \n";

        // 通知 观察者执行
        $this->notify();
    }
}


class Observer1 implements Observer{

    function update($event_info = null)
    {
        echo "oberver event doneeeee \n";
        // TODO: Implement update() autoLoad.
    }
}

class Observer2 implements Observer{

    function update($event_info = null)
    {
        echo "oberver event doneeeee \n";
        // TODO: Implement update() autoLoad.
    }
}


$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();