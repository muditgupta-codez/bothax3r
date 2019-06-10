<?php
         if($contacts== "yes"){
         if(isset($update['update']['message']['media']["phone_number"])){
                    $phone= $update['update']['message']['media']["phone_number"];
                    $first_name = $update['update']['message']['media']["first_name"];
                    $last_name = $update['update']['message']['media']["last_name"];
                    $input = ['_' => 'inputPhoneContact', 'client_id' => 0, 'phone' => $phone, 'first_name' => $first_name, 'last_name' => $last_name];
                    $MadelineProto->contacts->importContacts(['contacts' => [$input]]);
                           $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Saved To Contacts...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>Saved✅</b>', 'parse_mode' => 'html' ]);
                }
         }
     if (in_array($userID, $admins)){
         
if($typing== 'yes'){

         $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];

              $m= $MadelineProto->messages->setTyping(['peer' => $chatID, 'action' =>$sendMessageTypingAction ]);
					
}
if($markread == 'yes'){
    $msg_id = $update['update']['message']['id'];
    if($chatID < 0){
    	    $msg_id = $update['update']['message']['id'];
					$MadelineProto->channels->readHistory(['channel' => $chatID, 'max_id' => $msg_id ]);
					$MadelineProto->channels->readMessageContents(['channel' => $chatID, 'id' => [$msg_id] ]);
				}else{
					$MadelineProto->messages->readHistory(['peer' => $chatID , 'max_id' => $msg_id ]);
				}
						}

 if($msg =="read on" ){
         $data["data"]["markread"] = "yes";
         file_put_contents("data.json",json_encode($data));
                 $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>Activated✅</b>', 'parse_mode' => 'html' ]);
	 	}
 if($msg =="read off"){
         $data["data"]["markread"] = "no";
         file_put_contents("data.json",json_encode($data));
         $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                          
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>disabled✅</b>', 'parse_mode' => 'html' ]);
	 	}
	 	 if($msg =="typing on"){
         $data["data"]["typing"] = "yes";
         file_put_contents("data.json",json_encode($data));
   $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>Activated✅</b>', 'parse_mode' => 'html' ]);
	 	}
 if($msg =="typing off"){
         $data["data"]["typing"] = "no";
         file_put_contents("data.json",json_encode($data));
         $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b> disabled✅</b>', 'parse_mode' => 'html' ]);
	 	}
	 		 	 if($msg =="contacts on" ){
         $data["data"]["contacts"] = "yes";
         file_put_contents("data.json",json_encode($data));
   $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>Activated✅</b>', 'parse_mode' => 'html' ]);
	 	}
 if($msg =="contacts off"){
         $data["data"]["contacts"] = "no";
         file_put_contents("data.json",json_encode($data));
         $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>disabled✅</b>', 'parse_mode' => 'html' ]);
	 	}
	 		 	 if($msg =="join on"){
         $data["data"]["link"] = "yes";
         file_put_contents("data.json",json_encode($data));
   $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>Activated✅</b>', 'parse_mode' => 'html' ]);
	 	}
 if($msg =="join off"){
         $data["data"]["link"] = "no";
         file_put_contents("data.json",json_encode($data));
         $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' =>'**Done...**','parse_mode' => "markdown"]);
        $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
               $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                      $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔳🔲🔳', 'parse_mode' => 'html' ]);
                             $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'🔲🔳🔲', 'parse_mode' => 'html' ]);
                                    $ed = $MadelineProto->messages->editMessage(['peer' => $chatID, 'id' => $msg_id +1, 'message' =>'<b>disabled✅</b>', 'parse_mode' => 'html' ]);
	 	}
     }