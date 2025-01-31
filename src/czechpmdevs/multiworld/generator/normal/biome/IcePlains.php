<?php

/**
 * MultiWorld - PocketMine plugin that manages worlds.
 * Copyright (C) 2018 - 2022  CzechPMDevs
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace czechpmdevs\multiworld\generator\normal\biome;

use czechpmdevs\multiworld\generator\normal\biome\types\GrassyBiome;
use czechpmdevs\multiworld\generator\normal\biome\types\SnowyBiome;
use czechpmdevs\multiworld\generator\normal\populator\impl\TreePopulator;
use pocketmine\block\utils\TreeType;

class IcePlains extends GrassyBiome implements SnowyBiome {

	public function __construct() {
		parent::__construct(0, 0.5);
		$this->addPopulator(new TreePopulator(2, 2, 90, TreeType::SPRUCE()));
		$this->setElevation(100, 106);
	}

	public function getName(): string {
		return "Ice Plains";
	}
}