<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <title>COACHTECH</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gorditas&display=swap" rel="stylesheet">
</head>
<style>
  body {
        font-size:12px;
        color:black; 
        margin: 30px;
        width: 1000px;
        hight: 800px;
}
  h2 {
        text-align: center;
  }
  section {
        margin-left: 50px;      
  }
  .ptb-m {
        padding: 10px 0;
}
  .wrap{
       width: 90%;
       margin: 0 auto;
}
  .user_info {
       table-layout: fixed;
       width: 100%;
       border-collapse: separate;
       border-spacing: 0px 8px;
}     
  .user_info-th {
       padding:30px 0;
       width: 30%; 
}
  .user_info-td {
       padding:20px 0;
}
  th {
        text-align: left;        
} 
  td {
        margin-left:150px;
        text-align: left;  
        word-wrap: break-word;        
}      
  .opin_s { 
         width: 30px;        
  }
  .button {
        text-align: center;
        margin-top: 200px;              
}
  .button_tx {
        width: 120px;
        text-align: center;
        margin-bottom: 10px; 
        margin: 50px auto 0;
	  padding: 10px;
	  border-radius: 5px;
        display: block;
        background-color: #000;
        color: #fff;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        cursor: pointer;          
}
  .button-modi {        
        text-align: center;  
  }  
</style>
<body>
      <h2>お問い合わせ</h2>
<section>
<form method="POST" action="/contact/send">
    @csrf
<div class="wrap ptb-m">
<table class="user_info">
<tr>
  <th class="user_info-th"><label>お名前</label></th>
  <td class="user_info-td">{{ $inputs['last_name'] }} {{ $inputs['first_name'] }}
  <input
        name="fullname"
        value="{{ $inputs['last_name'].''.$inputs['first_name'] }}"
     type="hidden">
</td>
</tr>
 <tr>
  <th class="user_info-th"><label>性別</label></th>
  <td class="user_info-td">{{ $inputs['gender'] }}
  <input
        name="gender"
        value="{{ $inputs['gender'] }}"
        type="hidden">  
</td>
</tr>
<tr> 
<th class="user_info-th"><label>メールアドレス</label></th>
  <td class="user_info-td">{{ $inputs['email'] }}
  <input
        name="email"
        value="{{ $inputs['email'] }}"
        type="hidden">
</td> 
</tr> 
<tr>
  <th class="user_info-th"><label>郵便番号</label></th>
  <td class="user_info-td">{{ $inputs['postcode'] }}
  <input
        name="postcode"
        value="{{ $inputs['postcode'] }}"
        type="hidden"> 
</td>
</tr> 
<tr>
  <th class="user_info-th"><label>住所</label></th>
   <td class="user_info-td">{{ $inputs['address'] }}
   <input
        name="address"
        value="{{ $inputs['address'] }}"
        type="hidden"> 
</td>
</tr>
<tr> 
<th class="user_info-th"><label>建物名</label></th>
  <td class="user_info-td">{{ $inputs['building_name'] }}
  <input
        name="building_name"
        value="{{ $inputs['building_name'] }}"
        type="hidden"> 
</td>
</tr>       
<tr>   
   <th class="user_info-th opin_s"><label>ご意見</label></th>
   <td class="user_info-td">{{ $inputs['opinion'] }}
   <input
        name="opinion"
        value="{{ $inputs['opinion'] }}"
        type="hidden">
</td>
</tr>
</table>
</div> 
<div class="button">      
  <button class="button_tx" type="submit" name="action" value="submit">送信</button>
</form>
<form method="POST" action="/contact/">
<p class="button_modi"><a href ="http://127.0.0.1:8000/contact">修正する</a></p>
</form>
  </div>
</section>
</bdy>
</html>