<?php
$conn = mysqli_connect('localhost','spcom_userakoua','MGROY892CICG','spcom_akoua');
$sqlquery="select * from publish";
$res=mysqli_query($conn,$sqlquery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	
    .like{
/* border-radius: 45px; */
/* width: 50px;
height: 50px; */
margin-left: 340px;
margin-top: -30px;
position: absolute;
text-decoration: none;
background-color: white;
padding: 10px;
}
.dislike{
  /* border-radius: 45px; */
  margin-left: 400px;
  margin-top: -28px;
  position: absolute;
  text-decoration: none;
  background-color: white;
  padding: 10px;
}

.countL{
background-color: red;
color: white;
border: 0.2px red solid;
padding: 7px;
border-radius: 60%;
position:absolute;
margin-left: -30px;
margin-top: 3px;
font-size: large;
}
.countD{
background-color: blue;
color: white;
border: 0.2px blue solid;
padding: 7px;
border-radius: 50%;
margin-top: 5px;
position:absolute;
font-size: large;
margin-left: 3px;
}

</style>
    <title>Document</title>
</head>
<body>
	<div class="liked">

 
			 
				<div class="like">
                <span class="countL" id="like_loop_<?php echo $row['id']?>"><?php echo $row['like_counter']?></span>
<a href="javascript:void(0)" class="thumbsUp">

<span class="fa fa-thumbs-o-up" style="font-size:50px;color:red" onclick="like_update('<?php echo $row['id']?>')"></span>

</a>
</div>
				<div class="dislike">
				<a href="javascript:void(0)" class="thumbsDown">
				<span class="fa fa-thumbs-o-down" style="font-size:50px;color:blue; transform: rotateY(180deg);" onclick="dislike_update('<?php echo $row['id']?>')"></span>
				</a>
                <span class="countD" id="dislike_loop_<?php echo $row['id']?>"><?php echo $row['dislike_counter']?></span>
				</div>
		


				</div>
  <script>
	function like_update(id){
		jQuery.ajax({
		 url:'MaJ.php',
       // url: 'update.php',
		type:'post',
		data:'type=like&id='+id,
		success:function(result){
		var current_count=jQuery('#like_loop_'+id).html();
		current_count++;
		jQuery('#like_loop_'+id).html(current_count);
			
				}
			});
		}	
		
		function dislike_update(id){
			jQuery.ajax({
			     url:'MaJ.php',
               // url: 'update.php',
				type:'post',
				data:'type=dislike&id='+id,
				success:function(result){
					var current_count=jQuery('#dislike_loop_'+id).html();
					current_count++;
					jQuery('#dislike_loop_'+id).html(current_count);
			
				}
			});
		}	
		</script>

            
</body>
</html>


