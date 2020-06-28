<?php

namespace royal\NetherItems\Netherite;

use pocketmine\entity\Entity;
use pocketmine\item\Tool;
use pocketmine\item\Hoe;


class NetheriteHoe extends Hoe{

    public function __construct(int $meta = 0){
		parent::__construct(747, $meta, "Netherite hoe", 5);
    }

	public function onAttackEntity(Entity $victim) : bool{
		return $this->applyDamage(1);
    }
    public function getMaxDurability() : int{
		return 555;
	}
}


