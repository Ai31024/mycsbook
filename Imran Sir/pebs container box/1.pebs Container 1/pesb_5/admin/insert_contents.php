<?php
session_start();

	if($_SESSION['login_user'])
		
		{
			
		}
		
	else
	{
		header('location:../index.php');
	}
	?>
	
	<?php
	
	if(isset($_POST['submit_volume']))
	
	{
	$w_date = date('y/m/d');
	$volume =$_POST['vol_input'];
	
	$pht = $_FILES["myfile"];
	
	
	$pht2 = preg_replace("/ /","_",$_FILES['myfile']['name']);
	
	
	
	$journalname ="content_list/".$pht2;
	
		move_uploaded_file($pht['tmp_name'], "../final_pdf/".$pht2);
		
		
	
	//echo $journalname;
	
	$sl=0;
	$srl_no=0;
	
	//generating the serial number for header table
	include('db_conn.php');
	$qry="SELECT max(`sl_no`) FROM `headings` WHERE `title_id` = $volume";
	$run = mysqli_query($con,$qry);
		$data= mysqli_fetch_array($run);
		
		$srl_no=$data[0];
		
		//echo $srl_no;
	if
	($srl_no == null) {
		$sl=1;
		//echo $sl;
	}else{
	$sl=(($srl_no)+1);
		//echo $sl;
	}
	
	//mysqli_close($con);
	
	
	
	//include('db_conn.php');
	$sql = "INSERT INTO `headings` (`id`, `title_id`, `sl_no`, `header`, `author`, `pages`, `date_incep`, `key_words`, `abstract_matter`, `document_path`) VALUES 
									(NULL, '$volume', '$sl', '$topic', '$author', '$pages', '$publication_date', '$keywords', '$abstract', '$journalname')";
						
					//
					$run1 = mysqli_query($con,$sql);
	
						if($run1 ==True)
		
	
							{ 
								?>
						
									<script> 
										var mywindow ="upload_panel.php?id=" + "<?php $user_id ?>"; 
										alert('Journal Uploaded Successfully !!'); 
										window.open((mywindow),'_self')
									</script>
						
								<?php
							}
						else
							{ 
								?>
						
									<script> 
										alert('Something Went Wrong !!, Please Try Again or Contact Us !'); 
										
									</script>
						
								<?php
							}
					//
	
	}	
?>
