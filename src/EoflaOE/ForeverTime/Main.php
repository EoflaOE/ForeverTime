<?php

namespace EoflaOE\ForeverTime;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\network\protocol\SetTimePacket;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
            case "timestuck": {
                if(isset($args[0])){
                	  if(isset($args[1]) and $args[1] === "morning"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickday = 0;
                	  	        $method = $this->getServer()->getLevelByName($args[0])->setTime($tickday);
                	  	        $method2 = $this->getServer()->getLevelByName($args[0])->stopTime();
            	  	            $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  } elseif(isset($args[1]) and $args[1] === "night"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $ticknight = 14000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($ticknight);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "noon"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $ticknoon = 6000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($ticknoon);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "afternoon"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickanoon = 9000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickanoon);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "dusk"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickdusk = 12000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickdusk);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	}elseif(isset($args[1]) and $args[1] === "dawn"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickdusk = 22550;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickdusk);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} elseif(isset($args[1]) and $args[1] === "midnight"){
                	  	    if(!$this->getServer()->isLevelGenerated($args[0])){
                	  	    	    $sender->sendMessage(TextFormat::RED . "Failed to set " . TextFormat::AQUA . $args[0] . TextFormat::RED . " because it is not a level or is not generated yet");
                	  	    	    
                	  	    	}
                	  	    	
		                    if(!$this->getServer()->isLevelLoaded($args[0])){
		                    	  $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " is not loaded. Loading...");
		                    	  $this->getServer()->loadLevel($args[0]);
		                    	  if(!$this->getServer()->loadLevel($args[0])){
		                    	  	    $sender->sendMessage(TextFormat::RED . "Level " . TextFormat::AQUA . $args[0] . TextFormat::RED . " could not be loaded");
		                    	  	    
		                    	  	}
		                    	  
		                    }

                        if($this->getServer()->isLevelGenerated($args[0]) and $this->getServer()->isLevelLoaded($args[0])){
                	  	        $sender->sendMessage(TextFormat::GREEN . "Setting " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " to " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever...");
                	  	        $tickmnight = 18000;
                	  	        $this->getServer()->getLevelByName($args[0])->setTime($tickmnight);
                	  	        $this->getServer()->getLevelByName($args[0])->stopTime();
                	  	        $sender->sendMessage(TextFormat::GREEN . "Time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . " has stopped at " . TextFormat::AQUA . $args[1] . TextFormat::GREEN . " forever!");
                	  	        $sender->sendMessage(TextFormat::GREEN . "If you wish to start the time for " . TextFormat::AQUA . $args[0] . TextFormat::GREEN . ", stop the server and then start it.");
                	  	        
                	  	    }
                	  	    
                	  	} else {
                	  		
                	  		  $sender->sendMessage(TextFormat::AQUA . "Usage: /timestuck <level> <morning|noon|afternoon|night|midnight|dawn|dusk>");
                	  		  
                	  	}
                	  	
                } else {
                	
                	  $sender->sendMessage(TextFormat::AQUA . "Usage: /timestuck <level> <morning|noon|afternoon|night|midnight|dawn|dusk>");
                	  
                }
                
            }
                	  	
            break;
        }
     return false;
    }
}
