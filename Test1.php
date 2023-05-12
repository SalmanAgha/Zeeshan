<?php
session_start();
include('connect.php');
error_reporting(1);
if( !isset($_SESSION['userid']) ){
    header("location: Login.php");
}else{ 
    $userid = $_SESSION['userid'];
}


$block = 'block';
$result = 'none';
 
if($_SESSION['test1'] == 'Completed'){
$block = 'none';
$result = 'block';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <?php include 'meta.php';?>
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!-- Top Bar Start -->
    <?php include "navbar.php"; ?>
    <div class="page-wrapper"> 
        <!-- Left Sidenav -->
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right">
                                <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                 <li class="breadcrumb-item"><a href="javascript:void(0);">Test 1</a></li> 
                             </ol>
                         </div>
                         <h4 class="page-title">Welcome <?php echo $_SESSION['name'];?> </h4>
                     </div><!--end page-title-box-->
                 </div><!--end col-->
             </div>
             <div id="TestPage"  <?php echo  ' style="display : '.$block.' ;"  ' ?>  >
                 <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                   <div class="col-sm-12 col-md-12 col-lg-12">
                                       <h1>Questionnaire</h1><br>
                                       <p>This test is dedicated to find out your preferred learning method. Research on the left/right brain differences and also on learning personality differences suggest that each person has a preferred way to receive and communicate information. Choose the answer that best explains your preference
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <form id="mcq-form">
                  <!-- question 1 -->
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-12">
                                <h4>Question 1: You are about to give directions to a person. She is staying in a hotel in town and wants to visit your house. She has a rental car. Would you:</h4> 
                                <br>
                                <input class="cust_radio" type="radio" name="q1" value="V"><label class="cust_padding">draw a map on paper?</label><br>
                                <input class="cust_radio" type="radio" name="q1" value="R"><label class="cust_padding">write down the directions (without a map)?</label>
                                <br>
                                <input class="cust_radio" type="radio" name="q1" value="A"><label class="cust_padding">tell her the directions?</label><br>
                                <input class="cust_radio" type="radio" name="q1" value="K"><label class="cust_padding">collect her from the hotel in your car?</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- question 2 -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                       <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4>Question 2: You are staying in a hotel and have a rental car. You
                            would like to visit a friend whose address/location you
                        do not know. Would you like them to:</h4> 
                        <br>
                        <input class="cust_radio" type="radio" name="q2" value="V"><label class="cust_padding">draw you a map?</label><br>
                        <input class="cust_radio" type="radio" name="q2" value="R"><label class="cust_padding">write down the directions (without a map)?</label><br>
                        <input class="cust_radio" type="radio" name="q2" value="A"><label class="cust_padding">tell you directions?</label><br>
                        <input class="cust_radio" type="radio" name="q2" value="K"><label class="cust_padding">collect you from the hotel in their car?</label><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- question 3 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 3: You have just received a copy of your itinerary for a
                world trip. This is of interest to your friend. Would you:</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q3" value="A"><label class="cust_padding">call her immediately and tell her about it?</label><br>
                <input class="cust_radio" type="radio" name="q3" value="R"><label class="cust_padding">Send her a copy of the printed itinerary?</label><br>
                <input class="cust_radio" type="radio" name="q3" value="V"><label class="cust_padding">show her a map of the world?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 4 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 4: You have just received a copy of your itinerary for a
                world trip. This is of interest to your friend. Would you:</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q4" value="K"><label class="cust_padding">cook something familiar without the need for instructions?</label><br>
                <input class="cust_radio" type="radio" name="q4" value="V"><label class="cust_padding">thumb through a cookbook looking for ideas from the pictures?</label><br>
                <input class="cust_radio" type="radio" name="q4" value="R"><label class="cust_padding">refer to a specific cookbook where there is a good recipe?</label><br>
                <input class="cust_radio" type="radio" name="q4" value="A"><label class="cust_padding">ask for advise from others?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 5 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 5: A group of tourists has been assigned to you to find out about national parks. Would you:</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q5" value="K"><label class="cust_padding">drive them to a national park?</label><br>
                <input class="cust_radio" type="radio" name="q5" value="V"><label class="cust_padding">show them slides and photographs?</label><br>
                <input class="cust_radio" type="radio" name="q5" value="R"><label class="cust_padding">give them a book on national parks?</label><br>
                <input class="cust_radio" type="radio" name="q5" value="A"><label class="cust_padding">give them a talk on national parks?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 6 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 6: You are about to purchase a new stereo. Other than the price, what would most influence your decision?</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q6" value="A"><label class="cust_padding">a friend talking about it?</label><br>
                <input class="cust_radio" type="radio" name="q6" value="K"><label class="cust_padding">listening to it?</label><br>
                <input class="cust_radio" type="radio" name="q6" value="R"><label class="cust_padding">reading the details about it?</label><br>
                <input class="cust_radio" type="radio" name="q6" value="V"><label class="cust_padding">its distinctive, upscale appearance?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 7 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 7: Recall a time in your life when you learned how to do something like playing a new board game. Try to avoid choosing a very physical skill, i.e. riding a bike. How did you learn best? By:V. visual clues-pictures, diagrams,</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q7" value="V"><label class="cust_padding">visual clues-pictures, diagrams, charts?</label><br>
                <input class="cust_radio" type="radio" name="q7" value="R"><label class="cust_padding">written instructions?</label><br>
                <input class="cust_radio" type="radio" name="q7" value="A"><label class="cust_padding">listening to somebody explain it?</label><br>
                <input class="cust_radio" type="radio" name="q7" value="K"><label class="cust_padding">doing it?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 8 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 8: Which of these games do you prefer?</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q8" value="A"><label class="cust_padding">Pictionary?</label><br>
                <input class="cust_radio" type="radio" name="q8" value="R"><label class="cust_padding">Scrabble?</label><br>
                <input class="cust_radio" type="radio" name="q8" value="K"><label class="cust_padding">Charades?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 9 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 9: You are about to learn how to use a new program on a computer. Would you:</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q9" value="K"><label class="cust_padding">ask a friend to show you?</label><br>
                <input class="cust_radio" type="radio" name="q9" value="R"><label class="cust_padding">read the manual which comes with the program?</label><br>
                <input class="cust_radio" type="radio" name="q9" value="A"><label class="cust_padding">telephone a friend and ask questions about it?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 10 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 10: You are not sure whether a word should be spelled "dependent" or "dependant". Do you:</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q10" value="R"><label class="cust_padding">look it up in a dictionary?</label><br>
                <input class="cust_radio" type="radio" name="q10" value="V"><label class="cust_padding">see the word in your mind and choose the best way it looks?</label><br>
                <input class="cust_radio" type="radio" name="q10" value="A"><label class="cust_padding">sound it out?</label><br>
                <input class="cust_radio" type="radio" name="q10" value="K"><label class="cust_padding">write both versions down?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 11 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 11: Apart from price, what would most influence your decision to buy a particular textbook?</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q11" value="K"><label class="cust_padding">using a friends copy?</label><br>
                <input class="cust_radio" type="radio" name="q11" value="R"><label class="cust_padding">skimming parts of it?</label><br>
                <input class="cust_radio" type="radio" name="q11" value="A"><label class="cust_padding">a friend talking about it?</label><br>
                <input class="cust_radio" type="radio" name="q11" value="V"><label class="cust_padding">it looks OK?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 12 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 12:A new movie has arrived in town. What would most influence your decision to go or not go?</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q12" value="A"><label class="cust_padding">friends talking about it?</label><br>
                <input class="cust_radio" type="radio" name="q12" value="R"><label class="cust_padding">you read a review about it?</label><br>
                <input class="cust_radio" type="radio" name="q12" value="V"><label class="cust_padding">You saw a preview of it?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 13 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12">
                <h4>Question 13:Do you prefer a lecturer/teacher who likes to use:</h4> 
                <br>
                <input class="cust_radio" type="radio" name="q13" value="R"><label class="cust_padding">handouts and/or a textbook?</label><br>
                <input class="cust_radio" type="radio" name="q13" value="V"><label class="cust_padding">flow diagrams, charts, slides?</label><br>
                <input class="cust_radio" type="radio" name="q13" value="K"><label class="cust_padding">field trips. labs, practical sessions?</label><br>
                <input class="cust_radio" type="radio" name="q13" value="A"><label class="cust_padding">discussion, guest speakers?</label><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- question 13 -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
     <center> 
         <input type="submit" class="btn btn-primary btn-round btn-block waves-effect waves-light cust_button_1" name="submit" value="Submit">
     </center>
 </div>
</div>
</form>
</div><!-- Test Page -->
<div id="Test_Result"  <?php echo  ' style="display : '.$result.' ;"  ' ?>>
 <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                   <div class="col-sm-12 col-md-12 col-lg-12">
                    <center> <h1>Result</h1></center>
                    <center> <h3>UserID : <span id="userid">-</span></h3></center>
                    <center> <h3>Name : <span id="name">-</span></h3></center>
                    <center> <h3>Email : <span id="email">-</span></h3></center>
                    <center> <h3>Unique Code : <span id="uniquecode">-</span></h3></center>


                </div>
                <div class="col-sm-3 col-md-3 col-lg-3"> 
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6"> 
                  <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>V</th>
                            <th>R</th>
                            <th>A</th>
                            <th>K</th>
                            <th>Highest</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="V">-</td>
                            <td id="R">-</td>
                            <td id="A">-</td>
                            <td id="K">-</td>
                            <td id="Highest">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="Block1" style="display:none;">
           <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:center;">
  <h4>You have been identified as a <strong>Visual Learner</strong>. Follow these simple tips to assist you in learning more efficiently.</h4>
  <h5>In Class You Should:</h5>
  <ul style="list-style:none; padding-left:0;">
    <li>1.Underline</li>
    <li>2.Use different colors</li>
    <li>3.Use symbols, charts, arrangements on a page</li>
  </ul>
  <h5>When Studying You Should:</h5>
  <ul style="list-style:none; padding-left:0;">
    <li>1.Use the In Class method</li>
    <li>2.Reconstruct images in different ways</li>
    <li>3.Redraw pages from memory</li>
    <li>4.Replace words with symbols and initials</li>
  </ul>
  <h5>During Exams You Should:</h5>
  <ul style="list-style:none; padding-left:0;">
    <li>1.Recall the pictures of the pages</li>
    <li>2.Draw, use diagrams where appropriate</li>
    <li>3.Practice turning visuals back into words</li>
  </ul>
</div>
    </div>
    <div id="Block2" style="display:none;">
      <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:center;">
        <h4>You have been identified as a Reading/Writing Learner. Follow these simple tips to assist you in learning more efficiently.</h4>
        <h5>In Class You Should:</h5>
        <ul style="list-style:none; padding-left:0;">
          <li>1.Use lists, headings</li>
          <li>2.Use dictionary and definitions</li>
          <li>3.Use handouts and textbooks</li>
          <li>4.Read</li>
          <li>5.Use lecture notes</li>
      </ul>
      <h5>When Studying You Should:</h5>
      <ul style="list-style:none; padding-left:0;">
          <li>1.Write out the words again and again</li>
          <li>2.Reread notes silently</li>
          <li>3.Rewrite ideas into other words</li>
          <li>4.Organize diagrams into statements</li>
      </ul>
      <h5>During Exams You Should:</h5>
      <ul style="list-style:none; padding-left:0;">
          <li>1.Practice with multiple choice questions</li>
          <li>2.Write out lists</li>
          <li>3.Write paragraphs, beginnings, endings</li>
      </ul>
  </div>
</div>

<div id="Block3" style="display:none;">
  <div class="col-sm-12 col-md-12 col-lg-12" style="text-align:center;">
    <h4>You have been identified as an Aural Learner. Follow these simple tips to assist you in learning more efficiently.</h4>
    <h5>In Class You Should:</h5>
    <ul style="list-style:none; padding-left:0;">
      <li>1.Attend lectures and tutorials</li>
      <li>2.Discuss topics with students</li>
      <li>3.Explain new ideas to other people</li>
      <li>4.Use a tape recorder</li>
      <li>5.Describe overheads, pictures, and visuals to somebody that was not there</li>
      <li>6.Leave space in notes for later recall</li>
  </ul>
  <h5>When Studying You Should:</h5>
  <ul style="list-style:none; padding-left:0;">
      <li>1.Understand you may take poor notes because you prefer to listen</li>
      <li>2.Expand your notes</li>
      <li>3.Put summarized notes on tape and listen</li>
      <li>4.Read summarized notes out loud</li>
      <li>5.Explain notes to another Aural person</li>
  </ul>
  <h5>During Exams You Should:</h5>
  <ul style="list-style:none; padding-left:0;">
      <li>1.Listen to your voices and write them down</li>
      <li>2.Speak your answers</li>
      <li>3.Practice writing answers to old exam questions</li>
  </ul>
</div>
</div>
<div id="Block4" >
 <div class="col-sm-12 col-md-12 col-lg-12 " style="display:none;" style="text-align:center;">
  <h4>You have been identified as a <strong>Kinesthetic Learner</strong>. Follow these simple tips to assist you in learning more efficiently.</h4>
  <h5>In Class You Should:</h5>
  <ul style="list-style:none; padding-left:0;">
    <li>1.Use all of your senses</li>
    <li>2.Go to lab, take field trips</li>
    <li>3.Use trial and error methods</li>
    <li>4.Listen to real life examples</li>
    <li>5.Use hands-on approach</li>
</ul>
<h5>When Studying You Should:</h5>
<ul style="list-style:none; padding-left:0;">
    <li>1.Understand you may take notes poorly due to topics not seeming relevant</li>
    <li>2.Put examples in note summaries</li>
    <li>3.Use pictures and photos to illustrate</li>
    <li>4.Talk about notes with another Kinesthetic person</li>
</ul>
<h5>During Exams You Should:</h5>
<ul style="list-style:none; padding-left:0;">
    <li>1.Write practice answers</li>
    <li>2.Role-play the exam situation in your room</li>
</ul>
</div>
</div>
</div>
</div>
   <?php
if($_SESSION['test2'] == 'Completed'){    
$blocktext= 'Proceed to <a href="Home.php">Home Page</a>';
}
else {
$blocktext= ' Proceed to <a href="Test2.php">Test 2 Page</a> ';

}
?>
 
<div class="row">
    <div class="col-md-12">
        
   
    <center><h1>

<?php echo $blocktext;?>
    
    </h1></center>
</div>
 </div>
</div>
</div>
</div>
</div>
</div><!-- container -->
<?php include("footer.php");?>
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!--Plugins-->
<script src="assets/plugins/moment/moment.js"></script>
<!-- Required datatable js -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>
<script src="functions/Test1.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>