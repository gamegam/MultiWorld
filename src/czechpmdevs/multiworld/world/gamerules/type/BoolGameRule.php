<?php

/** @noinspection PhpMissingFieldTypeInspection */

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

namespace czechpmdevs\multiworld\world\gamerules\type;

use czechpmdevs\multiworld\world\gamerules\GameRule;
use pocketmine\network\mcpe\protocol\serializer\PacketSerializer;
use pocketmine\network\mcpe\protocol\types\GameRuleType;

/** @internal */
class BoolGameRule extends GameRule {

	/** @var bool */
	protected bool|float|int $value;

	public function __construct(string $enumName, string $ruleName, bool $defaultValue) {
		parent::__construct($enumName, $ruleName, GameRuleType::BOOL);
		$this->value = $defaultValue;
	}

	/**
	 * @return $this
	 */
	public function setValue(bool|float|int $value): BoolGameRule {
		$this->value = (bool)$value;
		return $this;
	}

	public function getValue(): bool {
		return (bool)$this->value;
	}

	public function encode(PacketSerializer $out): void {
		$out->putBool($this->getValue());
	}
}