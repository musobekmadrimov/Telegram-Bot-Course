<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram;

/**
 * Class HelpCommand.
 */
class AnyCommand extends Command
{
    /**
     * @var string Command Name
     */
    

    /**
     * @var array Command Aliases
     */

    /**
     * @var string Command Description
     */
    

    /**
     * {@inheritdoc}
     */
    public function handle()
    
    {
        $response = $this->getUpdate();
        
        // $name = $response['message']['from']['first_name'];    
        // $text = 'Assalamu alaykum, ' .$name. ' Men ishlayapman, lekin qanday ishlayotganimni o\'zim bilmayman!'.chr(10).chr(10);    
        // $this->replyWithMessage(compact('text'));
        // $text = "Yoshingiz ?";
        $this->replyWithMessage(compact($response['message']['from']['first_name']));

    }
}