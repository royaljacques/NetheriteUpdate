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

use royal\NetherItems\Netherite\{NetheriteBoots, NetheriteHoe, NetheriteShovel, NetheriteChestplate, NetheriteHelmet, NetheriteLeggings, NetheriteSword, NetheritePickaxe, NetheriteAxe};



class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getLogger()->info( "§aPlugin Chargé avec succès !");
    ItemFactory::registerItem(new NetheriteBoots(),true);
    ItemFactory::registerItem(new NetheriteChestplate(),true);
    ItemFactory::registerItem(new Item(752, 0, "Netherite Scrap"));
    ItemFactory::registerItem(new NetheriteHelmet(),true);
	ItemFactory::registerItem(new NetheriteLeggings(),true);
	ItemFactory::registerItem(new NetheriteSword(),true);
    ItemFactory::registerItem(new Item(736, 0, "Honeycomp"));
    ItemFactory::registerItem(new NetheritePickaxe(),true);
    ItemFactory::registerItem(new NetheriteAxe(),true);
    ItemFactory::registerItem(new NetheriteShovel(),true);
    ItemFactory::registerItem(new NetheriteHoe(),true);
    ItemFactory::registerItem(new Item(742, 0, "Netherite Ingot"));
    ItemFactory::registerItem(new SuspiciousStew(), true);
    ItemFactory::registerItem(new HoneyBottle(), true);
    Item::initCreativeItems();

    }
}
