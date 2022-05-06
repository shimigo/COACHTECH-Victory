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
    font-size: 12px;
    color:black; 
    margin: 30px;
    width: 1000px;
    hight: 800px;
  }
h2 {
        text-align: center;
    }
.wrap_search {
     margin-left: 0;
     background-color: white;
     border: solid 0.5px black;
      width: 1000px;
      height: 230px;
      top: 300px;
      left: 450px;
      margin-bottom: 30px;
  }
  .lab_fullname {
    margin-left: 20px;
    margin-right: 60px;
    font-weight: bold;
  }
.fullname {
  margin-top: 10px;
  margin-right: 30px;
  font-size:20px;
}
.lab_gen {
  font-weight: bold;
}
.gender_man {
   margin-left: 120px;
   margin-bottom: 25px;
}
.m {
   margin-left: 30px;
}
.gender_woman {
   margin-left: 30px;
   margin-bottom: 25px;
}
.w {
     margin-left: 30px;
}
.lab_reg {
    font-weight: bold;
    margin-left: 20px;
}
.date_from {
  margin-top: 10px;
  margin-left: 60px;
  margin-right: 10px;
  font-size:20px;
}
.date_until {
  margin-top: 10px;
  margin-left: 10px;
  font-size:20px;
}
.lab_mail {
  font-weight: bold;
  margin-left: 20px;
}
.email {
  margin-top: 10px;
  margin-left: 10px;
  font-size:20px;
}
.search_button {        
  width: 120px;
  margin: 30px auto 0;
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
.reset {        
  text-align: center;  
}
.mg_th1 {
  width: 50px; 
  text-align: left; 
 }
.mg_th2 {
  width: 120px;
  text-align: left;  
 }
.mg_th3 {
  width: 80px; 
  text-align: left;  
 }
.mg_th4 {
  width: 250px;  
  text-align: left;  
 }
.mg_th5 {
  width: 350px;
  text-align: left;
  padding-right: 30px;    
 }
 .button-delete {
  padding: 0 15px;
  background-color: #000;
  color: #fff;
 }
  svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
    }
</style>
<body>

<h2>管理システム</h2>
<section class="wrap_search">
<form action="/search" method="GET">
  @csrf
<div>
  <label class="lab_fullname">お名前</label>
  <input class="fullname" type="text" class="form-control" name="fullname" value="">
  <lable class="lab_gen">性別</label>
  <select class="form-control" name="gender">
       <option selected value="0">全て</option>      
       <option value="1">男</option>
       <option value="2">女</option>
     </select>
</div>
<div>
<label class="lab_reg">登録日</label>
  <input class="date_from" type="date" name="from" value=""><span>~</span>
  <input class="date_until" type="date" name="until" value="">
  </div>
  <div>
  <label class="lab_mail">メールアドレス</label>
  <input class="email" type="email" name="email" value="">
  </div>
  <div>
  <button type="submit" class="search_button">検索</button>
  </div>
  <div>
  <form action="/find" name="id" method="POST">
          @csrf
  <p class="reset"><a href ="http://127.0.0.1:8000/find">リセット</a></p>
  </form> 
  </div>
</form>
<div style="margin-top:50px;">
  </section>

  <table class="mg_table">
  <tr>
    <th class="mg_th1">ID</th><th class="mg_th2">お名前</th><th class="mg_th3">性別</th><th class="mg_th4">メールアドレス</th><th class="mg_th5">ご意見</th>
  </tr>
@foreach($contacts as $contact)
  <tr>
    <td>{{$contact->id}}</td><td>{{$contact->fullname}}</td><td>{{$contact->gender}}</td><td>{{$contact->email}}</td><td>{{$contact->opinion}}</td>
    
    <td class="deleted">
      <form action="/delete/{{$contact->id}}" name="id" method="post">
          @csrf
      <button class="button-delete">削除</button>
      </from>
    </td>
  </tr>
@endforeach
</table>

</div>

</body>
</html>
