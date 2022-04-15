<?php


/* -- 以下、基本の設定 ------------------------------------------------------------------------------------------------------------------------------------------------- */


//【必須】 自分のメールアドレスの設定 -- 複数のメールアドレスに送信したい場合は、以下の行をコピーして増やしていけばOKです。行頭の//を消せば有効となります。いくつでも追加可能。 --
if($_SERVER['HTTP_HOST']=="http://noland.sakura.ne.jp")
{
    $rm_send_address[] = 'info@ibaraki-rehabili.com';
}
elseif($_SERVER['HTTP_HOST']=="ibaraki-rehabili.com")
{
    $rm_send_address[] = 'info@ibaraki-rehabili.com';
}
else{
    $rm_send_address[] = '6280ikiad@gmail.com';
}
$rm_send_address[] = '6280ikiad@gmail.com';


//【必須】 サンクスページのURL -- index.htmlからの相対パス、またはhttp://からの絶対パス --
if($_SERVER['HTTP_HOST']=="http://noland.sakura.ne.jp")
{
    $rm_thanks_page_url = 'http://noland.sakura.ne.jp/ibaraki/mail/thanks.html';
}
if($_SERVER['HTTP_HOST']=="ibaraki-rehabili.com")
{
    $rm_thanks_page_url = 'https://ibaraki-rehabili.com/mail/thanks.html';
}








/* -- 以下、自分に届くメールの設定 ------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 自分に届くメールの題名
$rm_send_subject = 'いばらき訪問リハビリセンター　メールフォームからのお問い合わせ';




//【任意】 自分に届くメールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_send_body = <<<EOM

いばらき訪問リハビリセンター　メールフォームからお問い合わせがありました。
お問い合わせの内容は以下の通りです。

EOM;








/* -- 以下、相手への自動返信メールの設定 ------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 相手に自動返信メールを送るかどうか -- 送らない場合は0、送る場合は1にしてください。 --
$rm_reply_mail = 1;




//【だいたい必須】 メールの差出人名に表示される自分の名前 -- 相手への自動返信メールに使用されます --
$rm_send_name = 'いばらき訪問リハビリセンター';




//【任意】 相手に届く自動返信メールの題名
$rm_thanks_subject = 'いばらき訪問リハビリセンターへお問い合わせ頂きありがとうございます';




//【任意】 相手に届く自動返信メールの本文 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body  = <<<EOM

いばらき訪問リハビリセンターへのお問い合わせありがとうございます。
以下の内容でお問い合わせをお受けいたしました。
一両日中に、メールにて担当者よりご連絡いたしますので、今しばらくお待ちくださいますようお願い申し上げます。

-----------------------------------------------------------------------------------

【お問い合わせ日時】
2022 年 04 月 12 日 16 時 21 分 00 秒

【お名前】
東樹 美都理

【メールアドレス】
info@webcreat.biz

【郵便番号】
3320032

【ご住所】
埼玉県川口市中青木

【お電話番号】



【お問い合わせの内容】
これはテストです


EOM;




//【だいたい必須】 相手に届く自動返信メールの最後に付加される署名 -- EOMからEOM;までの間の文章を自由に変更してください。 --
$rm_thanks_body_signature = <<<EOM

-----------------------------------------------------------------------------------

いばらき訪問リハビリセンター営業部 大貫
電話番号 0120-725-601
営業時間 9：00～20：00(年中無休)
ホームページ:https://ibaraki-rehabili.com/
Email:info@ibaraki-rehabili.com


-----------------------------------------------------------------------------------

EOM;








/* -- 以下、スパム対策機能 --------------------------------------------------------------------------------------------------------------------------------------------- */


//【任意】 メールフォームを設置するサイトのドメイン -- 記入した場合はリファラチェック機能が有効になります。 --
$rm_domain_name = '';
//$rm_domain_name = '1-firststep.com';








