 <?php
  

function send_LINE($msg){
 $access_token = 'rJHE9UvM/q1dt71JBbTMTwFqpX4z94DYdWNofcAsskb/xDHa4DAq90Ty7CGPeVyOWCILPAmhUOY4buExHWmrdqxle6M1KAH0shuUVdx1hjEpSR7aaemmDW3UiCPAN5xCeh4Hi+2OyQ0L009lqn5hygdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'fb4ed53e2bee7b7f0e4c8a66406ce36b',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
