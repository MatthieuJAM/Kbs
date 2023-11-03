<?php

namespace Kbs;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    public function onEnable() : void{
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDamage(EntityDamageByEntityEvent $event){
        $event->setKnockBack($this->getConfig()->get("kb"));
        $event->setVerticalKnockBackLimit($this->getConfig()->get("verticalkb"));
        $event->setAttackCooldown($this->getConfig()->get("attackcooldown"));
    }
}