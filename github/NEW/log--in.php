<?php

?>
<html>
<head>
<title> create  </title>
<style>
body{
 background: rgb(240,240,232);
    background: linear-gradient(0deg, rgba(240,240,232,1) 0%, rgba(232,184,176,1) 100%);
    background-size: cover;
    background-position:center;
}
.login-page{
    width: 360px;
    padding:10% 0 0;
    margin: auto;
}
.form{
  position: relative;
  z-index:1;
  background-color: #ffffff;
  max-width:360px;
  margin:0 auto 100px;
  padding:45px;  
  text-align: center;
}

.form input{
    font-family:"Roboto",sans-serif;
    outline:1;
    background-color: #f2f2f2;
    width:100%;
    border:0;
    margin:0 0 15px;
    padding:15px;
    box-sizing:border-box;
    font-size: 14px;
}
.form button{
    font-family:"Roboto",sans-serif;
    text-transform: uppercase;
    outline: 0;
    background:#e8b8b0;
    width: 100%;
    border:0;
    padding:15px;
    color:#ffffff;
    font: size 14px;
    cursor: pointer;

}
.form button:hover,.form button:active{
    background-color: #e88c7d;
}
.form .message{
    margin:15px 0 0;
    color:#ba2108;
    font-size: 12px;
}

.form .message a{
    color:#e88c7d;
    text-decoration: none;
}

.form .register-from{
    display: none;
}
</style>
</head>

<?php

?>

<body>
    

<form action= '' method='POST'>
<div class="login-page">
 <div class="form">
 <form class="login-form">
 UserName:<input type="text" name="UserName">
</br>
<!-- placeholderتخلي الكلام مكتوب جوا البوكس 
name بدون ما يظهر الكلام في البراوزر-->
Password:<input type="password" name="Password">
</br>

<button>log-in</button>
<!-- شرط اذا كان المستخدم دخل اليوزر والباس صح ولا لا +نقدر نطلعهامن الفورم زنخليها برا -->
<?php

?>
 <p action="message"> I haven't account <a href="createe.php"> create account</a></p>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
 
<script>
$('.message a').click(function(){
 $('form').animate({height:"toggle",opacity:"toggle"},"slow");
});
</script>
</body>
</html>