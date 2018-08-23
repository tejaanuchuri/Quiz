<?php
    session_start();
    if( empty( $_SESSION['quiz'] ) )$_SESSION['quiz']=date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
      <script language ="javascript" >
    <?php

if(isset($_SESSION['timeLeft'])){
  echo 'var timeLeft = ' . $_SESSION['timeLeft'] . ';';
  $_SESSION['timeLeft'] = undefined;
}else{
  echo 'var timeLeft = 0;';
}
              $start=$_SESSION['quiz'];
              $end=date('Y-m-d H:i:s', strtotime( $_SESSION['quiz'] . ' +30minutes' ) );
                echo "
                    var date_quiz_start='$start';
                    var date_quiz_end='$end';
                    var time_quiz_end=new Date('$end').getTime();"

      ?>
        var tim;
        var hour= 00;
        var min = 29;
        var sec = 60;
        var f = new Date();
        function f1() {
            f2();
            document.getElementById("starttime").innerHTML = "Your started your Exam at" + f.getHours() + ":" + f.getMinutes();
        }
        function f2() {
            if (parseInt(sec) > 0) {
                sec = parseInt(sec) - 1;
                document.getElementById("showtime").innerHTML ="Left Time is : "+min+" Min :" +sec+" Sec ";
                tim = setTimeout("f2()", 1000);
            }
            else {
                if (parseInt(sec) == 0) {
                    min = parseInt(min) - 1;
                    if (parseInt(min) == 0) {
                        clearTimeout(tim);
                        location.href ="home.html";
                    }
                    else {
                        sec = 60;
                        document.getElementById("showtime").innerHTML = min + "Minutes" + sec + "Seconds";
                        tim = setTimeout("f2()", 1000);
                    }
                }
            }
        }
  </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Techyuva</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<!--<script type="text/javascript" src="js/modernizr.custom.js"></script>-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
     html,body{
    height:100%;

  }
     img{
    width:20%;height:20%;
  }

   /* Full-width input fields */
input[type=text], input[type=password] {
    width: 80%;
    padding: 9px;
    margin: 1px 0 12px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    float: center;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: white;/*#ddd*/
    /*soutline: none;*/

}

/* Set a style for all buttons */
button {
    background-color: green;/*#4CAF50*/
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn{
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 23%;
}

/* Add padding to container elements */
.container {
    padding: 22px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    /*position: fixed; Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 10%; /* Full width */
    height: 10%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: transparent;/*#474e5d*/
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: transparent;/*#fefefe*/
    margin: 15% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
h2,p{
      font-size: 18px;
}
h1{
  font-size: 18px;
}
q1{
  align-content: center;
  font-size: 72px;
}
.btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 4;
}
.panel panel-default{
  background-color: green;
}
.btn-circle {
    width: 32px;
    height: 32px;
    padding: 6px 0px;
    border-radius: 18px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

.btn btn-success btn-circle{
  float: right;
  position: absolute;
}
.container{
  border-width: 80%;
  border-color: #E6E6FA;
}
#form1{

  width:100%;
  float:left;
  height:50%;
  background-color:#E6E6FA;

}
#button1{
  margin-left:80%;
  width:25%;
  height:auto;
  background-color:black;
  position:reletive;

}
.aaa{
  margin-left:10.5px;
  margin-right:20px;
  margin-top:4px;
}
.text-center qqq{
  background-color: white;
}
h5{
font-size: 42px;
}
h6{
font-size: 36px;
}


/*#shuffle > div {
    float: left;
    line-height: 30px;
    width: 30px;
    background-color: #E6E6FA;
    color: #fff;
    border-radius: 4px;
    margin: 3px;
}
#shuffle {
    max-width: 360px;
}
*/
</style>
</head>
      <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="f1()">
          <div id="preloader">
            <div id="status"> <img src="img/preloader.gif" height="64" width="64" alt=""> 
            </div>
          </div>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll"> <i class="fa fa-paper-plane-o"></i>  Spurthi'18</a> 
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="logout.php">Logout</a> </li>
      </ul>
     </div>
    <!-- /.navbar-collapse --> 
  
  <!-- /.container --> 
</nav>


<!-- Team Section -->
<div class="container"><!--/endcontainer-1-->
      <h5 align="center">
         SPURTHI'18
      </h5>  
      <h6 align="center">Techyuva</h6>
      <div id="team" class="text-center"><!--/team -->
  
       <div class="container"><!--/container-2-->       
                 
        </div> <!--/endcontainer-2-->
    <div id="wrap">
       <div id="form1"> 
          <form action="score1.php" method="POST">
<div id="shuffle">
<div id="team1" class="text-center qqq">
             <div class="container" >
              <h1 align="left"><strong>Consider the following code. The function myStrcat concatenates two strings. It appends all characters of b to end of a. So the expected output is "Spurthi". The program compiles fine but produces segmentation fault when run.
  <p>#include &ltstdio.h&gt</p>
<p>  #include&ltstring.h&gt</p>
<p>void myStrcat(char *a, char *b)</p>
<p>{</p>
    <p>int m = strlen(a);</p>
<p>    int n = strlen(b);</p>
    <p>int i;</p>
<p>    for (i = 0; i <= n; i++)</p>
<p>       a[m+i]  = b[i];</p>
<p>}</p>

<p>int main()</p>
<p>{</p>
<p>    char *str1 = "Spurthi";</p>
<p>    char *str2 = "18";</p>
<p>    myStrcat(str1, str2);</p>
<p>    printf("%s ", str1);</p>
<p>    return 0;</p>
<p>}</p>
<p>Which of the following changes can correct the program so that it prints "Spurthi18"?</p>
</strong></h1>
             <div id="q1" align="left">         
                        
                        <p><input type="radio" name="question-1-answers" id="question-1-answers-A" value="C" />char *str1 = "Spurthi "; can be changed to char str1[100] = "Spurthi ";</p>
                      <p><input type="radio" name="question-1-answers" id="question-1-answers-A" value="C" />char *str1 = "Spurthi "; can be changed to char str1[100] = "Spurthi "; and a line a[m+n-1] ='\0' is added at the end of myStrcat</p>
                      <p><input type="radio" name="question-1-answers" id="question-1-answers-A" value="C" />A line a[m+n-1] = '\0' is added at the end of myStrcat</p>
                   <p><input type="radio" name="question-1-answers" id="question-1-answers-A" value="C" />A line 'a = (char *)malloc(sizeof(char)*(strlen(a) + strlen(b) + 1)) is added at the beginning of myStrcat()</p>


                         </div> 
              </div>
           </div>
           <div id="team2" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What will be output of following c code?
<p>             #include&ltstdio.h&gt</p>

<p>extern int x;</p>

<p>int main(){</p>

<p>do{</p>

<p>do{</p>

<p>printf(“%o”,x);</p>

<p>}</p>

<p>while(!-2);</p>
<p>}</p>
<p>while(0);</p>
<p>return 0;</p>
<p>}</p>
<p>int x=8;</p>
</strong></h1>
             <div id="q1" align="left">         
              <p><input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" /> 11</p>
                          <p><input type="radio" name="question-2-answers" id="question-2-answers-A" value="B" /> 10</p>
                           <p><input type="radio" name="question-2-answers" id="question-2-answers-A" value="C" />01</p>
                           <p><input type="radio" name="question-2-answers" id="question-2-answers-A" value="D" />8</p>
                          
            </div> 
            </div>
           </div>

           <div id="team3" class="text-center qqq">
            <div class="container">
            <h1 align="left"><strong>
               What will be output if you will compile and execute the following c code
<p>struct marks{</p>
<p>  int p:3;</p>
<p>  int c:3;</p>
<p> int m:2;</p>
<p>};</p>
<p>void main(){</p>
<p>  struct marks s={2,-6,5};</p>
<p>  printf("%d %d %d",s.p,s.c,s.m); </p>
<p>}</p>

</strong></h1>
            <div id="q1" align="left">         
                        <p><input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" /> 2 -6 5</p>
                        <p><input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />2 -6 1</p>         
                        <p><input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />2 2 1</p>
                        <p><input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" /> Compilation error</p>

            </div>
            </div>
           </div>

           <div id="team4" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong> What will be output if you will compile and execute the following c code?



<p>void start();</p>

<p>void end();</p>
<p>
#pragma startup start</p>
<p>
#pragma exit end</p>

<p>int static i;</p>

<p>void main(){</p>

<p>   printf("\nmain function: %d",++i);</p>

<p>}</p>

<p>void start(){</p>

<p>   clrscr();</p>

<p>   printf("\nstart function: %d",++i);</p>

<p>}</p>

<p>void end(){</p>

<p>   printf("\nend function: %d",++i);</p>

   <p>getch();</p>

<p>}</p>

</strong></h1>
             <div id="q1" align="left">         
                        <p><input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" /><p>main function: 2</p>

<p>start function: 1</p>

<p>end function:3</p>

  
</p>
                        <p><input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" /><p>start function: 1</p>

<p>main function: 2</p>

<p>end function:3</p>
</p>
                        <p><input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" /><p>main function: 2</p>

<p>end function:3</p>

<p>start function: 1</p>
</p>
                        <p><input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />Compiler error</p>                           
              </div> 
              </div>
           </div>

           <div id="team5" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong> What will happen if you execute following program?

<p>#include&ltstdio.h&gt</p>
<p>int main()</p>
<p>{</p>
<p>    char *str;</p>
<p>    FILE *fp;   </p>
<p>    fp=fopen("c:\tc\bin\test.txt","r");</p>
<p>    while(fgets(str,15,fp)!=NULL)</p>
<p>    printf("%s",str);</p>
<p>    fclose(fp);</p>
<p>    return 0;</p>
<p>}</p>
<p>test.txt:
  You are participating in the event “TechYuva”.</p>

</strong></h1>
             <div id="q1" align="left">         
                        <p><input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />prints nothing</p>
                        <p><input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />"TechYuva"</p>
                       <p><input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" /> You are participating in the event “TechYuva”.</p>
                        <p><input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />You are partici</p>                           
              </div> 
              </div>
           </div>

           <div id="team6" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>Which among the following is the correct syntax to declare a static variable register?
</strong></h1>
             <div id="q1" align="left">         
                        <p><input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />static register a;</p>
                        <p><input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />register static a;</p>
                        <p><input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />Both static register a; and register static a;</p>
                        <p><input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />D) We cannot use static and register together</p>                           
              </div> 
              </div>
           </div>

           <div id="team7" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong> Which of the following is the correct output for program given below?
<p>#include&ltstdio.h&gt</p>
<p>#define sqr(x) x*x</p>
<p>Void main()</p>
<p>{</p>
<p>float  s=20,u=50,t=3,a;</p>
<p>a=2*(s-u*t)/sqr(t);</p>
<p>printf(“%f”,a);</p>
<p>}</p>

</strong></h1>
             <div id="q1" align="left">         
                        <p><input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />-28.8888</p>
                        <p><input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />-260.0000</p>
                        <p><input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />0.0000</p>
                        <p><input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />260.0000</p>                           
              </div> 
              </div>
           </div>

           <div id="team8" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What is the output of this code (run without any commandline arguments)?
     <p>#include&ltstdio.h&gt</p>
<p>  int main(int argc,char *argv[])</p>
<p>{</p>
<p>   while(*argv++!=NULL)</p>
<p>     printf("%s\n",*argv);</p>
<p>return 0;</p>
<p>}</p>

</strong></h1>
             <div id="q1" align="left">         
                        <p><input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />segmentation fault code/code crash.</p>
                        <p><input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />executable file name</p>
                        <p><input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />depends on the platform</p>
                        <p><input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />depends on the compiler</p>                           
              </div> 
              </div>
           </div>

           <div id="team9" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong> The maximum number of argumnets that can be passed in a single function are..?
</strong></h1>
             <div id="q1" align="left">         
                        <p><input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />127</p>
                        <p><input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />253</p>
                        <p><input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />361</p>
                        <p><input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />no limits in number of argumnets</p>                           
              </div> 
              </div>
           </div>

           <div id="team10" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>what will be the output of the program?
<p> #include&ltstdio.h&gt</p>
<p> int main()</p>
<p>{</p>
<p>  void foo( );</p>
<p>   void f( )</p>
<p>    {</p>
<p>         foo( );</p>
<p>      }</p>
<p>     f( );</p>
<p>}</p>
<p>void foo( )</p>
<p>{</p>
<p> printf("2");</p>
<p>}</p>

</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />2 2</p>
                        <p><input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />2</p>
                        <p><input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />compile time error</p>
                        <p><input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />depends on the compiler</p>              
                      </div> 
              </div>
           </div>

           <div id="team11" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>write output of the program?
<p>#include&ltstdio.h&gt</p>
<p>int main()</p>
<p>{ </p>
<p> int i=1;</p>
<p>switch(i)</p>
<p>  {</p>
<p>case i:</p>
<p>       printf("case1 executed");</p>
<p>        break;</p>
<p> case i+1:</p>
     <p> printf("case 2 executed");</p>
<p>      break;</p>
<p>printf("default block executed");</p>
<p>break;</p>
<p>}</p>
<p>return 0;</p>
<p>}</p>
</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />compilation errord</p>
                     <p><input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" /> case1 executed</p>
                    <p><input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />case 2 executed</p>
                     <p><input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" /> case 2 executed  default block executed</p>                           
              </div> 
              </div>
           </div>

           <div id="team12" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>what will be the output of the program?
<p>#include&ltstdio.h&gt</p>
<p>void main()</p>
<p>{</p>
<p>printf("spurthi  18\rcse\n");</p>
<p>printf("spurthi  18\b\b\bcse\n");</p>
<p> }</p>
</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />cse
<p>   spurthi cse</p>
</p>
                        <p><input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />cse
<p>   spurthcs8</p>
</p>       <p><input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />spurthi  18
 <p>   spurthi 18</p>
</p>
                        <p><input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />cserthi 18
<p>    spurthicse</p>
</p>                           
              </div> 
              </div>
           </div>


          <div id="team13" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>what will be the output of the following program?
<p>  #include&ltstdio.h&gt</p>
<p>int main()</p>
<p>{</p>
<p>int i=-1,j=-1,k=0,l=2,m;</p>
<p>m=i++&&j++&k++||l++;</p>
<p>printf("%d %d %d %d %d ",i,j,k,l,m);</p>
<p>return 0;</p>
<p>}</p>

</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />0 0 1 2 1</p>
                      <p><input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />0 0 1 3 2</p>         
                      <p><input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />0 0 1 3 1</p>
                      <p><input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />0 1 1 3 1</p>                           
              </div> 
              </div>
           </div>

           <div id="team14" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What is the output of this c code?
<p>#include&ltstdio.h&gt</p>
<p>#define foo(m,n) "  m ## n "</p>
<p>int main()</p>
<p>{</p>
<p>printf("%s\n",foo(k, l));</p>
<p>} </p>

</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />k l</p>
                      <p><input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />kl</p>
                      <p><input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />compile time error</p>
                      <p><input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />m ## n</p>                           
              </div> 
              </div>
           </div>

           <div id="team15" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What will be the output of the following program?
<p>  #include&ltstdio.h&gt</p>
<p>  #define FUN(x)  x*x</p>
<p>  int main()</p>
<p>{</p>
<p>   int val=0;</p>
<p>   val=128/FUN(8);</p>
<p>printf("val=%d",val);</p>
<p>return 0;</p>
<p>}</p>
</strong></h1>
             <div id="q1" align="left">         
                     <p><input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />2</p>
                     <p><input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />128</p>
                      <p><input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />64
</p>
                        <p><input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />1</p>                           
              </div> 
              </div>
           </div>

           <div id="team16" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What is the output of this c code?
<p>       #include&ltstdio.h&gt</p>
<p>      #include&ltmath.h&gt</p>
   <p>void main()</p>
<p>{</p>
<p>   int k=sqrt(-4);</p><p>  prinf("%d\n",k);</p>

<p>}</p>


</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />-2</p>
                      <p><input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />2</p>         
                      <p><input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />compile time error</p>
                      <p><input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />NaN</p>                           
              </div> 
              </div>
           </div>

           <div id="team17" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>Which of these is a correct way to generate numbers between 0 to 1(inclusve )randomly?</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />rand()/RAND_MAX</p>
                      <p><input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />rand()%2</p>
                               <p><input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />rand(0,1)</p>
                      <p><input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />none of the mentioned</p>                           
              </div> 
              </div>
           </div>

           <div id="team18" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What is the output of the code given below?
<p>     #include&ltstdio.h&gt</p>
<p>      int main()</p>
<p>       {</p>
<p>                   char *a[1]={"hello"};</p>
<p>                 printf("%s",a[0]);</p>
<p>                return 0;</p>
<p>         }</p>
</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />compile time error</p>
                    <p><input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />hello</p>
                       <p><input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />undefined behaviour</p>
                    <p><input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />hellone</p>                           
              </div> 
              </div>
           </div>

           <div id="team19" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What will be the output of the program?
<p>   #include&ltstdio.h&gt</p>
<p>   int main()</p>
<p>   {</p>
<p>    char str[]="Hello%s%dFriends";</p>
<p>   printf(str);</p>
   <p>printf("\n");</p>
   <p>printf("%s",str);</p>
<p>}</p>
</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />HelloFriends
<p>    HelloFriends</p>
</p>
                      <p><input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />Hello%s%dFriends      
<p>    Hello%s%dFriends</p>
</p>         <p><input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />Hello(null)0Friends
<p>    Hello%s%dFriends</p>
</p>
                      <p><input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />Garbage value</p>                           
              </div> 
              </div>
           </div>

           <div id="team20" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>The following declarations in order are
<p>     short a : 17;</p>
<p>    int long y : 33;</p>
</strong></h1>
             <div id="q1" align="left">         
                     <p><input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />Legal,legal</p>
                      <p><input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />Legal,illegal</p>
                       <p><input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />Illegal,illegal</p>   
                      <p><input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />Illegal,legal</p>                           
              </div> 
              </div>
           </div>

           <div id="team21" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>FILE reserved word is</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />A structure tag declared in stdio.h</p>
                      <p><input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />one of the basic datatypes in c</p>
                     <p><input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />pointer to the structure defined in stdio.h</p>
                      <p><input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />it is a type name defined in stdio.h</p>                           
              </div> 
              </div>
           </div>

           <div id="team22" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>Which type of the files can't be opened using fopen()?</strong></h1>
             <div id="q1" align="left">         
                     <p><input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />.txt</p>
                      <p><input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />.bin</p>
                      <p><input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />.c</p>
                      <p><input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />none of the mentioned</p>                           
              </div> 
              </div>
           </div>


           <div id="team23" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>Which is true about getc.getc returns?</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />the next character from the stream is not referred by file pointer</p>
                     <p><input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />EOF for end of file or error</p>          <p><input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />nothing</p>
                      <p><input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />none of the mentioned</p>                           
              </div> 
              </div>
           </div>

           <div id="team24" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>what is the output of this c code?
<p>     #include&gtstdio.h&gt</p>
<p>     int main()</p>
<p>{</p>
<p>FILE *fp;</p>
<p>  char c;</p>
<p>int n=0;</p>
<p>fp=fopen("newfile1.txt","r");</p>
<p>while(!feof(fp))</p>
<p>{</p>
<p>c=getc(fp);</p>
<p>putc(c,stdout);</p>
<p>}</p>
<p>}</p>
</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />compilation error</p>
                      <p><input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />prints to the screen content of newfile.txt completely</p>
                      <p><input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />prints to the screen some contents of newfile1.txt</p>
                       <p><input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />none of the mentioned</p>                           
              </div> 
              </div>
           </div>

           <div id="team25" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong><p>#include&ltstdio.h&gt</p>
<p>#define decode(s,t,u,m,p,e,d) m##s##u##t</p>
<p>#define begin decode(a,n,i,m,a,t,e)</p>
<p>int begin()</p>
<p>{</p>
<p>  printf("hello");</p>
<p>}</p>
</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />compilation error</p>
                     <p><input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />hello</p>
                    <p><input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />m##s##u##t</p>
                      <p><input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />main</p>                           
              </div> 
              </div>
           </div>

           <div id="team26" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What will be the output of the C program?

<p>#include&ltstdio.h&gt</p>
<p> int main()</p>
<p> { </p>
<p>printf("Line :%d\n", __LINE__ );</p>
<p> return 0;</p>
<p> } </p>
</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />3</p>
                     <p><input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />6</p>
                    <p><input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" /> Compilation error</p>
                        <p><input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />4</p>                           
              </div> 
              </div>
           </div>

           
           <div id="team27" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What will be the output of the C program ?

<p>#include&ltstdio.h&gt</p>
<p> #define CONDITION(i) </p>
<p>printf("preprocessor\n");</p>
<p> int main() </p>
<p>{ </p>
<p>CONDITION(0);</p>
<p> return 0; </p>
<p>} </p>
</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />preprocessor</p>
                      <p><input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />Runtime error</p>
                     <p><input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" /> Compilation error</p>
                        <p><input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" /> none of the above</p>                           
              </div> 
              </div>
           </div>

           <div id="team28" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>When the following code executes  what will be happened?
<p>#include&ltstdio.h&gt</p>
<p>#include&ltstring.h&gt</p>
<p> int main(int argc, char *argv[])</p>
<p> {</p>
<p> int i = 0;</p>
<p> char buff[100]; </p>
<p>memset(buff,0,sizeof(buff)); </p>
<p>strncpy(buff, argv[0], sizeof(buff));</p>
<p> memset(argv[0],0,strlen(buff));</p>
<p> strncpy(argv[0], "Name", 7);</p>
<p> for(;i&lt0xffffffff;i++); </p>
<p>return 0; </p>
<p>}</p>
</strong></h1>
             <div id="q1" align="left">         
                    <p><input type="radio" name="question-28-answers" id="question-28-answers-A" value="A" />Prints Name in console</p>
                      <p><input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />Changes name of the file</p>
                       <p><input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />compilation error</p>
                        <p><input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />run time error</p>                           
              </div> 
              </div>
           </div>

           <div id="team29" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>Which creates  a function that can accept any type of argument and returns an integer? Also, is there a way in which more than one arguments can be passed to it?</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />int func(void *ptr)</p>
                      <p><input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />int func(*ptr)</p>
                       <p><input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />int func(int *ptr)</p>
                        <p><input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />not possible</p>                           
              </div> 
              </div>
           </div>

           <div id="team30" class="text-center qqq">
             <div class="container">
             <h1 align="left"><strong>What does this declaration say?
<p>    int (*(*y)())[2];</p>
</strong></h1>
             <div id="q1" align="left">         
                      <p><input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />y is pointer to the function which returns pointer to integer array</p>

                      <p><input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />y is pointer to the function which returns array of pointers</p> 
                        <p><input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" /> y is function which returns function pointer which in turn returns pointer to integer array</p>
                        <p><input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />y is function which returns array of integers</p>                           
              </div> 
              </div>
           </div>


</div>
<input type="submit" value="Submit" class="btn btn-primary"><br><br>

</form>
</div><!-- end of form1-->
<div id="button1">
<div class="panel-group" float="right" >
    <div class="panel panel-default" style="position:fixed;margin-top:-15%;color: green;" >
        <div class="panel-body" style="background-color:#E6E6FA">
          <form id="form2" runat="server">

     <div>
      <table width="100%" align="center">
        <tr>
          <td colspan="2">
          </td>
        </tr>
        <tr>
          <td>
            <div id="starttime"></div><br />
            <div id="endtime"></div><br />
            <div id="showtime"></div>
          </td>
        </tr>
        <tr>
          <td>
              <br />
          </td>
        </tr>
      </table>
      <br />
    </div>
   </form> </div>
            </div>
         </div>
     </div><!-- end of button1-->
  </div><!-- end of wrap1-->

</div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<!--<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jquery.parallax.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> -->




<!-- Javascripts
    ================================================== --> 

   </div>


</body>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">

 $(function () {
    var parent = $("#shuffle");
    var divs = parent.children();
    while (divs.length) {
        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    }
});
</script>
</html>