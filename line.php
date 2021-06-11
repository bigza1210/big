 <?php
  

function send_LINE($msg){
 $access_token = 'LEYuEoLXQJl3u7KT6/lG+jqD58W4RArKdd7yQ6Io/8qFiNvcvvm5o0WZFCd67nTDWCILPAmhUOY4buExHWmrdqxle6M1KAH0shuUVdx1hjEX08NsXBL7X9ohUkdoVuymG78mvR1KNmKhcLcDxRGkOgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uec95268072d7d153b7428a1bcc026ae9',
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
