<?php

declare(strict_types=1);

namespace royal\NetherItems;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\items;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\event\Listener;


use royal\NetherItems\Netherite\NetheriteBoots;
use royal\NetherItems\Netherite\NetheriteChestplate;
use royal\NetherItems\Netherite\NetheriteHelmet;
use royal\NetherItems\Netherite\NetheriteLeggings;
use royal\NetherItems\Netherite\NetheriteSword;
use royal\NetherItems\Netherite\NetheritePickaxe;
use royal\NetherItems\Netherite\NetheriteAxe;



class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getLogger()->info( "§aPlugin Chargé avec succès !");
    ItemFactory::registerItem(new NetheriteBoots(),true);
    ItemFactory::registerItem(new NetheriteChestplate(),true);
    ItemFactory::registerItem(new NetheriteHelmet(),true);
	ItemFactory::registerItem(new NetheriteLeggings(),true);
	ItemFactory::registerItem(new NetheriteSword(),true);
    ItemFactory::registerItem(new NetheritePickaxe(),true);
    ItemFactory::registerItem(new NetheriteAxe(),true);
    Item::initCreativeItems();

    }
}
