<?php
namespace observer\EventGenerator;


// 抽象类，只需要继承，不需要实现
use observer\Observer\Observer;

abstract class EventGenerator
{

    // 观察者列表
    private $observers =array();

    // 增加观察者
    function addObserver(Observer $observer){
        $this->observers[]= $observer;
    }
    // 通知事件
    function notify(){
        foreach ($this->observers as $observer){
            $observer->update();
        }
    }

}