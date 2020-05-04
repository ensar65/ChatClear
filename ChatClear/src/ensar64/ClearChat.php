<?php
namespace ensar64;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
class ClearChat extends PluginBase {
public function onCommand(CommandSender $sender, Command $command, string $label ,array $args):bool {
switch($command) {
    case "clearchat":
        $name;
        if($sender instanceof Player) {
            $name = $sender->getPlayer()->getName();
        } else {
             $name = "CONSOLE";
            }
    for($i = 0; $i < 200;$i++){
$this->getServer()->broadcastMessage(" ");
    };
$this->getServer()->broadcastMessage("§6Chat §l§f".$name. "§r§6 adlı yetkili tarafından silindi.");
    break;
};
    return true;
}
};
?>