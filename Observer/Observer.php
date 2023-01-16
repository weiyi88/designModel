<?php
namespace observer\Observer;

// 观察者结构
interface Observer {
    function update($event_info= null);
}