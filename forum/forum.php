<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="forum.js"></script>
  <style>
body{
 
  background-image: linear-gradient(187deg, rgba(236, 236, 236, 0.07) 0%, rgba(236, 236, 236, 0.07) 50%,rgba(160, 160, 160, 0.07) 50%, rgba(160, 160, 160, 0.07) 100%),linear-gradient(255deg, rgba(79, 79, 79, 0.09) 0%, rgba(79, 79, 79, 0.09) 50%,rgba(134, 134, 134, 0.09) 50%, rgba(134, 134, 134, 0.09) 100%),linear-gradient(191deg, rgba(80, 80, 80, 0.08) 0%, rgba(80, 80, 80, 0.08) 50%,rgba(132, 132, 132, 0.08) 50%, rgba(132, 132, 132, 0.08) 100%),linear-gradient(339deg, rgba(210, 210, 210, 0.04) 0%, rgba(210, 210, 210, 0.04) 50%,rgba(36, 36, 36, 0.04) 50%, rgba(36, 36, 36, 0.04) 100%),linear-gradient(173deg, rgba(68, 68, 68, 0.09) 0%, rgba(68, 68, 68, 0.09) 50%,rgba(57, 57, 57, 0.09) 50%, rgba(57, 57, 57, 0.09) 100%),linear-gradient(317deg, rgba(10, 10, 10, 0.01) 0%, rgba(10, 10, 10, 0.01) 50%,rgba(17, 17, 17, 0.01) 50%, rgba(17, 17, 17, 0.01) 100%),linear-gradient(173deg, rgba(25, 25, 25, 0.07) 0%, rgba(25, 25, 25, 0.07) 50%,rgba(127, 127, 127, 0.07) 50%, rgba(127, 127, 127, 0.07) 100%),linear-gradient(222deg, rgba(199, 199, 199, 0.05) 0%, rgba(199, 199, 199, 0.05) 50%,rgba(59, 59, 59, 0.05) 50%, rgba(59, 59, 59, 0.05) 100%),linear-gradient(232deg, rgba(161, 161, 161, 0.01) 0%, rgba(161, 161, 161, 0.01) 50%,rgba(28, 28, 28, 0.01) 50%, rgba(28, 28, 28, 0.01) 100%),linear-gradient(90deg, rgb(0,2,29),rgb(4,150,89),rgb(0,0,0));
}

    
</style>
</head>

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Questions And Answers Forum</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>
<script> </script>
</div>

  </body>
</html>



