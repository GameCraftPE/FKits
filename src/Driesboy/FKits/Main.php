<?php
/*
	License Text
 */
namespace Driesboy\FKits;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

	public function onEnable() {
		//codes
	}

	public function onCommand(CommandSender $sender, Command $command, $lable, array $args) {
		switch(strtolower($command->getName())){
			$ce = $this->getServer()->getPluginManager()->getPlugin("PiggyCustomEnchants");
			$item = Item::get(Item::DIAMOND_SWORD);
			case "aerial":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
					$enchant = $ce->addEnchantment($item, "aerial", 1, $sender, null, null, $check, false);
					$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "blind":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "blind", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "charge":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
				  $enchant = $ce->addEnchantment($item, "charge", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "cripple":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
				  $enchant = $ce->addEnchantment($item, "cripple", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "deathbringer":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "deathbringer", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "lifesteal":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "lifesteal", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "poison":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "poison", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "vampire":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "vampire", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "wither":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "wither", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			$item = Item::get(Item::DIAMOND_PICKAXE);
			case "smelting":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "smelting", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "telepathy":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "telepathy", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			$item = Item::get(Item::DIAMOND_AXE);
			case "lumberjack":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "lumberjack", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			$item = Item::get(Item::DIAMOND_CHESTPLATE);
			case "berserker":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "berserker", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "frozen":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "frozen", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "hardened":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
			  	$enchant = $ce->addEnchantment($item, "hardened", 1, $sender, null, null, $check, false);
			  	$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "molten":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
				  $enchant = $ce->addEnchantment($item, "molten", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "selfdestruct":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
					$enchant = $ce->addEnchantment($item, "selfdestruct", 1, $sender, null, null, $check, false);
					$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "shrink":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
				  $item = Item::get(Item::DIAMOND_HELMET);
				  $enchant = $ce->addEnchantment($item, "shrink", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
					$item = Item::get(Item::DIAMOND_CHESTPLATE);
				  $enchant = $ce->addEnchantment($item, "shrink", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
					$item = Item::get(Item::DIAMOND_LEGGINGS);
				  $enchant = $ce->addEnchantment($item, "shrink", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
					$item = Item::get(Item::DIAMOND_BOOTS);
				  $enchant = $ce->addEnchantment($item, "shrink", 1, $sender, null, null, $check, false);
				  $sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			$item = Item::get(Item::DIAMOND_BOOTS);
			case "gears":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
					$enchant = $ce->addEnchantment($item, "gears", 1, $sender, null, null, $check, false);
					$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
			case "springs":
				if ($r = EconomyAPI::getInstance()->reduceMoney($sender, 1500)) {
					$enchant = $ce->addEnchantment($item, "springs", 1, $sender, null, null, $check, false);
					$sender->getInventory()->addItem($enchant);
				}else{
					switch ($r) {
						case EconomyAPI::RET_INVALID:
						# Invalid $amount
						break;
						case EconomyAPI::RET_CANCELLED:
						# Transaction was cancelled for some reason :/
						break;
						case EconomyAPI::RET_NO_ACCOUNT:
						# Player wasn't recognised by EconomyAPI aka. not registered
						break;
					}
				}
			break;
		}
	}
}
