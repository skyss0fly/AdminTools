<?php

namespace skyss0fly\AdminTools;

use dktapps\PMForms;
use pocketmine\plugin\PluginBase;
use pocketmine\{command\Command , command\CommandSender};

class Main extends Pluginbase {

public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "at":
if (!$sender instanceof Player){
$sender->sendMessage("Not in game >:(");
  return false;
}
else {

  if ($sender->hasPermission("AdminTools.Utilize")){


    return true;
  }
  else
  {
$sender->sendMessage("No perms :p");
    return false;
  }
}
 
          case "admintools":
if (!$sender instanceof Player){
$sender->sendMessage("Not in game >:(");
  return false;
}
else {

  if ($sender->hasPermission("AdminTools.Utilize")){


    return true;
  }
  else
  {
$sender->sendMessage("No perms :p");
    return false;
  }
}
