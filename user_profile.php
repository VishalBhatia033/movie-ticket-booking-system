<html>
<head>
    <style>
        table {
        width: 70vw;
        padding: 1rem;
        font-size: 0.8rem;
        
      }
      th {
        text-align: start;
      }
      th,
      tr,
      td {
        padding: 0.7rem 0.5rem;
      }
      td,tr,th,table {
        border: 1px solid grey;
        border-collapse:collapse;
        color: rgb(89, 88, 88);
      }
      .section{
        display:flex;
        justify-content:center;
        width:100vw;
        height:70vh;
      }
      .content{
        display:flex;
        justify-content:center;
        
      }
      h3{
        
      padding:1rem 0.5rem;
      }
    </style>
</head>
<body>
    
<?php include('connection.php');
// include('header.php');
session_start();
if(!isset($_SESSION['user_name']))
{
	header('location:login.php');
}
	?>
    <?php
    include("nav.php") ;
     ?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3 style="color:black;background-color:#D6D6D6;" class="text-center">BOOKING HISTORY</h3>
						<?php
				$bk=mysqli_query($conn,"select * from tbl_bookings where user_id='".$_SESSION['user_id']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table class="table table-bordered">
						<thead>
						<th>Booking Id</th>
						<th>Movie</th>
						<th>Theatre</th>
						<th>Screen</th>
						<th>Show</th>
						<th>Seats</th>
						<th>Amount</th>
						<th></th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($conn,"select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m);
							$s=mysqli_query($conn,"select * from tbl_screens where screen_id='".$bkg['screen_id']."'");
							$srn=mysqli_fetch_array($s);
							$tt=mysqli_query($conn,"select * from tbl_theatre where id='".$bkg['t_id']."'");
							$thr=mysqli_fetch_array($tt);
							$st=mysqli_query($conn,"select * from tbl_show_time where st_id=(select st_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$stm=mysqli_fetch_array($st);
							?>
							<tr>
								<td>
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td>
									<?php echo $mov['movie_name'];?>
								</td>
								<td>
									<?php echo $thr['name'];?>
								</td>
								<td>
									<?php echo $srn['screen_name'];?>
								</td>
								<td>
									<?php echo $stm['name'];?>
								</td>
								<td>
									<?php echo $bkg['no_seats'];?>
								</td>
								<td>
									Rs. <?php echo $bkg['amount'];?>
								</td>
								<td>
									<?php  if($bkg['ticket_date']<date('Y-m-d'))
									{
										?>
										<i class="glyphicon glyphicon-ok"></i>
										<?php
									}
									else
									{?>
									<a href="cancel.php?id=<?php echo $bkg['book_id'];?>" style="text-decoration:none; color:red;">Cancel</a>
									<?php
									}
									?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3 style="color:red;" class="text-center">No Previous Bookings Found!</h3>
					<p>Once you start booking movie tickets with this account, you'll be able to see all the booking history.</p>
					<?php
				}
				?>
					</div>			
				
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php  
include("footer.php");;
?>
<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>
</body>
</html>
