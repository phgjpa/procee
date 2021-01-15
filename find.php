<?php
 if(ISSET($_POST['search'])){
 $keyword = $_POST['keyword'];
?>
<div>
 <h2>Result</h2>
 <hr style="border-top:2px dotted #ccc;"/>
 <?php
 require 'connection.php';
 $query = mysqli_query($conn, "SELECT * FROM `posts` WHERE `subject` LIKE '%$keyword%' ORDER BY `subject`") or die(mysqli_error());
 while($fetch = mysqli_fetch_array($query)){
 ?>
 <div style="word-wrap:break-word;">
 <a href="find_post.php?id=<?php echo $fetch['post_id']?>"><h4><?php echo $fetch['subject']?></h4></a>
 <p><?php echo substr($fetch['data'], 0, 100)?>...</p>
 </div>
 <hr style="border-bottom:1px solid #ccc;"/>
 <?php
 }
 ?>
</div>
<?php
 }
?>