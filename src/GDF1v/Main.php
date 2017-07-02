<?php
namespace GDF1v;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("GDF1v has been enabled");
  $this->getLogger()->info("plugin by 4gamesl7o");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info("GDF1v has been disable");
   }
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch ($cmd->getName()){
     case 'vbv':
      $player = $sender->getPlayer();
       $player->setGamemode(1);
        break;
       }
      }
     }
