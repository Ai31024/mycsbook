<html>
<head>
<title>Marquee</title>
    <style>
        button
    {
        padding: 12px 20px;
        border: 0;
        background: #34a853;
        box-shadow: 0 5px 0 #1a7933;
        color:#fff;
        border-radius:4px;
        cursor:pointer;
        transition: all .1s linear;
        
        }
    button:hover
    {
        box-shadow:  0 2px 0 #1a7933;
        transform: translateY(3px);
        }
   
    </style>
</head>
    <body>
        <a href='index.php'><button>LogOut</button></a>
    <form method="post" action="mqdata.php">
        
    <table width='500' border='3' align='center'>
        <tr>
        <td colspan="20" align='center' bgcolor='yellow'><h1>Insert Notice</h1></td>
        </tr>
         <tr >
            <td align="right">Number:</td>
            <td><input type='text' name='id'>
                <font color='red'>  <?php echo @$_GET['id'];?></font>
            </td>
        <tr >
            <td align="right" >Notice:</td>
            <td><input type='text' name='notice'>
                <font color='red'>  <?php echo @$_GET['notice'];?></font>
            </td>
            
        </tr>
      
        <tr>
        <td align="center" colspan="6">
            <input type="submit" name="submit" value="submit"></td></tr>
        
        </table>
        </form>
 </body>
</html>
<?php
include('db_conn.php');
if(isset($_POST['submit']))
{
  $id = $_POST['id'];
  $notice = $_POST['notice'];
    
 if($id=='')
 
 {
    echo "<script>window.open('notice.php?name=id is required','_self')</script>";
    exit();
} 
if($notice==''){
    echo "<script>window.open('notice.php?name=Notice is required','_self')</script>";
    exit();
}

}

?>
<br><br><br><br>

<table align='center' width='1000' border='4'>
<tr>
    <td colspan="20" align='center' bgcolor='yellow'><h1>Viewing all the notice</h1></td>
</tr>  
    <tr align="center">
    <th>Serial No</th>
    <th>Notice</th>
    <th>Delete</th>


</tr>
    
<?php
        $conn = @mysql_connect("localhost","root","");
        $db = mysql_select_db('school',$conn);
        
        $que ="select * from marquee ";
        $run =mysql_query($que);
    while($row= @mysql_fetch_array($run))
    {
       $id = $row['id'];
       $notice =  $row[1];
    ?>
        <tr align="center">
        <td><?php echo $id; ?></td>
        <td><?php echo $notice; ?></td>
    
            <td><a href='delete_marquee.php?del=<?php echo $id;?>'>Delete</a></td>

    </tr>
    <?php } ?>
    
</table><br><br><br><br>