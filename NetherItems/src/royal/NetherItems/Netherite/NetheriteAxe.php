<?php

declare(strict_types=1);

namespace royal\NetherItems\Netherite;

use pocketmine\block\Block;
use pocketmine\block\BlockToolType;
use pocketmine\entity\Entity;
use pocketmine\item\Tool;


class NetheriteAxe extends Tool{
    public function __construct(int $meta = 0){
		parent::__construct(746, $meta, "Netherite axe", 5);
    }
    
    public function getMaxDurability() : int{
		return 2000;
	}

	public function getBlockToolType() : int{
		return BlockToolType::TYPE_AXE;
    }
    
	public function getBlockToolHarvestLevel() : int{
		return 5;
	}

	public function getAttackPoints() : int{
		return self::getBaseDamageFromTier($this->tier) - 1;
	}

	public function onDestroyBlock(Block $block) : bool{
		if($block->getHardness() > 0){
			return $this->applyDamage(1);
		}
		return false;
	}

	public function onAttackEntity(Entity $victim) : bool{
		return $this->applyDamage(2);
	}
}