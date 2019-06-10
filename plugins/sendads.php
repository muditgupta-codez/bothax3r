<?php
      if (in_array($userID, $admins)){

	if ($msg == 'f sgp') {
        $rid =  $update['update']['message']['reply_to_msg_id'];
       $dialogs = $MadelineProto->get_dialogs();
       foreach ($dialogs as $peer) {
          	$type = $MadelineProto->get_info($peer);
									$type3 = $type['type'];
								if($type3 == "supergroup" ||$type3 == "user"||$type3 == "chat"){
 $MadelineProto->messages->forwardMessages(['from_peer' => $chatID, 'to_peer' => $peer, 'id' => [$rid], ]); 
        }
        
       }
                         $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Forwarding your messages...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'<b>Done!✅</b>', 'parse_mode' => 'html' ]);
   }
 if(preg_match("/^[#\!\/](s sgp) (.*)$/", $msg)){
			preg_match("/^[#\!\/](s sgp) (.*)$/", $msg, $text1);
				$text = $text1[2];
			    $dialogs = $MadelineProto->get_dialogs();
       foreach ($dialogs as $peer) {
          	$type = $MadelineProto->get_info($peer);
									$type3 = $type['type'];
								if($type3 == "supergroup" ||$type3 == "user"||$type3 == "chat"){
   $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"$text"]); 
        }
        
       }
			
			   $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Sending your messages...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +2, 'message' =>'<b>Done!✅</b>', 'parse_mode' => 'html' ]);
			
   	}
      }