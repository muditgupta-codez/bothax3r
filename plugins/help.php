<?php
      if (in_array($userID, $admins)){
 if($msg =="help" ){
$MadelineProto->messages->sendMessage(['peer' =>$chatID,'message' =>  "
🔹 Group Advert Bot 🔹


🔺 on or off Auto Joiner Groups
🔻join on
🔻join off

🔺 Type mode
🔻 typing on
🔻 typing off

🔺 Read usres message
🔻 read on
🔻 read off

………………………………………………

✈️ Forward to all groups
🚨 f sgp [ reply ]
✈️ Forward to all users in PV
🚨 f pv [ reply ]
✈️ Forward to all chats ( Groups + users and.. )
🚨 f all [ reply ]

………………………………………………

🚀 Send to all groups
🗺 s sgp [ Text ]
🚀 Send to all users
🗺 s pv [ text ]
🚀 Send to all chats
🗺 s all [ text ]
………………………………………………

🔰 Set bio
🔺 /bio TEXT

🔰 Set name
🔺 /name NAME
………………………………………………

⛱ Add user t all Groups

⛱ /addall [ USERID ]

………………………………………………
✅ help
✅ Status
✅ ping 
✅ Online

………………………………………………

🚧 our channel @etechbots
🚧 Programmer @Hax3r
",'parse_mode' => 'MarkDown']);
     }
      }