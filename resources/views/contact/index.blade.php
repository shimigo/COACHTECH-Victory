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
  .wrap_indx {
     margin-left: 50px;
  }
  .lab_name {
    margin-right: 100px;
  }
  .name_exam {
    display:flex;
  }
  .lastname_exam {
    margin-left: 180px;
    margin-top: 10px;
    margin-bottom: 15px;
    color:gray;
  }
  .firstname_exam {
    margin-left: 310px;
    margin-top: 10px;
    margin-bottom: 15px;
    color:gray;
  }
  .last_name {
  margin-top: 10px;
  margin-right: 30px;
  font-size:25px;
}
.first_name {
  font-size: 25px;
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
.email_box_mg {
  font-size:25px;
  margin-left: 50px;
  margin-bottom: 25px;
}
.pos {
  margin-left: 140px;
}
.p-postal-code {
  font-size:25px;
  margin-bottom: 5px;
}
.address_msk {
 display: flex; 
}
.add_1 {
 margin-left: 120px;
 margin-bottom: 25px;
}
.address_bl-box {
 font-size:25px;
 margin-left: 110px;
 margin-bottom: 25px; 
}
.opinion_box-comnt {
 font-size:25px;
 margin-left: 100px;
 margin-bottom: 25px;  
}
.confirm_button {        
 width: 120px;
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
.opinion_mrk {
 vertical-align : top;
}
.opinion_box-comnt {
  text-align:left;
}
.email_exam {
  margin-left: 160px;
  margin-top: 0
  margin-bottom: 15px;
  color:gray;
} 
.post_exam {
  margin-left: 160px;
  margin-top: 10px;
  margin-bottom: 15px;
  color:gray;
} 
.address_exam {
  margin-left: 160px;
  margin-top: 10px;
  margin-bottom: 15px;
  color:gray;
}
.building_exam {
  margin-left: 160px;
  margin-top: 10px;
  margin-bottom: 15px;
  color:gray;
} 
span {
  color:red;
}

</style>
<body>
   <h2>??????????????????</h2>
<section class=wrap_indx>
<form class="h-adr" method="POST" action="/contact/confirm">
     @csrf
<div>
 <label for="name" class="lab_name">?????????<span>???</span></label>  
<input class="last_name" type="text" name="last_name" value="" required>
  @error('last_name') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror  
<input class="first_name" type="text" name="first_name" value="" required>
  @error('first_name') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror   
</div>
<div class="name_exam">
<div class="lastname_exam"> ????????????</div>
<div class="firstname_exam"> ????????????</div>
</div>
<div class="gender_button">
  <label for="gender">??????<span>???</span></label>
  <input class="gender_man" type="radio" style="transform:scale(3.0);" name="gender" value="1" checked ><label class="m">??????</label>
  <input class="gender_woman" type="radio" style="transform:scale(3.0);" name="gender" value="2" > ><label class="w">??????</label>
  @error('gender') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror
</div>
<div class="email_box">
  <label for="email">?????????????????????<span>???</span></label>
  <input class="email_box_mg" type="email" name="email" value="{{old('email')}}" required>
  @error('email') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror
</div>
<div class="email_exam"> ??????test@example.com</div>
<div class="post_address">  
<span class="p-country-name" style="display:none;">Japan</span>
<p class="pos">???<input type="postcode" name="text" class="p-postal-code" size="8" maxlength="8" onblur="toHalfWidth(this)"><br></p> 
<div class="post_exam"> ??????123-4567</div>
@error('address') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror  
<div class="address_msk">
<p class="add">??????<span>???</span>
<p class="add_1"><input required style="font-size: 25px; width: 650px" type="text" name="address" class="p-region p-locality p-street-address p-extended-address"/><br></p>
  @error('address') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror  
</div>
<div class="address_exam"> ????????????????????????????????????1-2-3</div>
<div class="address_bl">
  <label for="building_name">?????????</label> 
  <input   class="address_bl-box" style="width: 655px" type="text" name="building_name" value="{{old('building_name')}}">
  @error('building_name') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror
</div>
<div class="building_exam"> ?????????????????????????????????101 </div>
  <label class="opinion_mrk" for="opinion">?????????<span>???</span></label> 
  <textarea class="opinion_box-comnt" style="width: 655px; height: 200px;" cols="60" rows="2" name="opinion" value="{{old('opinion')}}" required></textarea>
  @error('opinion') 
      <tr>
        <th>?????????</th>
        <td>{{$message}}</td>
      </tr>
  @enderror  
  <div>
  <button class="confirm_button" type="submit">??????</button>
</div>
</form>
</section>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<script>
  function toHalfWidth(elm) {
    elm.value = elm.value.replace(/[???-??????-??????-??????-???]/g, function(s){
        return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
    });
} 
</script>
</body>
</html>


