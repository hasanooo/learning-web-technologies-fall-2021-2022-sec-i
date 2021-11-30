<?php
?>
<html>
    <head>
        <title>Ajax Calculator</title>
        <script type="text/Ajax" src="ajax.php"></script>
        <style>
            .but{
                width: 25px;
                height: 25px;
                font-weight: bold;
                text-align: center;
            }
            .cls{
                width: 25px;
                height: 25px;
                font-weight: bold;
                text-align: center;
                color: #FAEBD7;
                background-color:#FAEBD7;
            }
            .eql{
                width: 100%;
                height: 25px;
                font-weight: bold;
                text-align: center;
                color:#FAEBD7;
                background-color: #FAEBD7;
            }
            .display{
                background-color: #FAEBD7;
                border:1px #666 solid; 
                height: 50px; width: 150px; 
                text-align: right; 
                font-size: 20px;
            }
        </style>
        <script>
            $(document).ready(function(){
                $('input[type=button]').click(function(){
                    var num = $(this).val();
                    var old = $('#display').html();
                    //this will clear the screen
                    if( num === 'C' ){
                        $('#display').html('');
                        return;
                    }
                    if( num === '=' ){
                        $('#display').html(old);
                        return;
                    }
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'operation','num':num,'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
                $('#eql').click(function(){
                    var num = $('#display').html();
                    var old = $('#display').html();
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'equal', 'num':num, 'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
            });
        </script>
    </head>
    <body>
<form name = "form1">

  <input id = "calc" type ="text" name = "answer"> <br> <br>

  <input type = "button" value = "MC" onclick = "form1.answer.value += 'MC' ">
  <input type = "button" value = "MR" onclick = "form1.answer.value += 'MR' ">
  <input type = "button" value = "M+" onclick = "form1.answer.value += 'M+' ">
  <input type = "button" value = "M-" onclick = "form1.answer.value += 'M-'">
  <input type = "button" value = "MR" onclick = "form1.answer.value += 'MR'">
  <input type = "button" value = "M+" onclick = "form1.answer.value += 'M+'">

  <br> <br>

  <input type = "button" value = "%" onclick = "form1.answer.value += '%' ">
  <input type = "button" value = "CE" onclick = "form1.answer.value += 'CE' ">
  <input type = "button" value = "C" onclick = "form1.answer.value = ' ' " >
  <input type = "button" value = "⌫" onclick = "form1.answer.value = ' ' " id= "clear" >
  <br> <br>

  <input type = "button" value = "1/x" onclick = "form1.answer.value += '1/x' ">
  <input type = "button" value = "x2" onclick = "form1.answer.value += 'x2' ">
  <input type = "button" value = "2√x" onclick = "form1.answer.value += '2√x' ">
  <input type = "button" value = "÷" onclick = "form1.answer.value += '÷' ">
  
  <br> <br>
  
  
  <input type = "button" value = "7" onclick = "form1.answer.value += '7' ">
  <input type = "button" value = "8" onclick = "form1.answer.value += '8' ">
  <input type = "button" value = "9" onclick = "form1.answer.value += '9' ">
  <input type = "button" value = "*" onclick = "form1.answer.value += '*' ">
  <br> <br>

  <input type = "button" value = "4" onclick = "form1.answer.value += '4' ">
  <input type = "button" value = "5" onclick = "form1.answer.value += '5' ">
  <input type = "button" value = "6" onclick = "form1.answer.value += '6' ">
  <input type = "button" value = "-" onclick = "form1.answer.value += '-' ">
  <br> <br>

  <input type = "button" value = "1" onclick = "form1.answer.value += '1' ">
  <input type = "button" value = "2" onclick = "form1.answer.value += '2' ">
  <input type = "button" value = "3" onclick = "form1.answer.value += '3' ">
   <input type = "button" value = "+"onclick = "form1.answer.value += '+' ">
  <br> <br>
  <input type = "button" value = "+/-"onclick = "form1.answer.value += '+/-' ">
  <input type = "button" value = "0" onclick = "form1.answer.value += '0' ">
  <input type = "button" value = "." onclick = "form1.answer.value += '.' ">
  <input type = "button" value = "=" onclick = "form1.answer.value = eval(form1.answer.value) ">
  <br> 
  <br>
 
</form>
    </body>
</html>