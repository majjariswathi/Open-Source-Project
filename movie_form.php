
<?php 
if(isset($_POST["rate1"]))
{
header('Location:avatar.php');
}
else if(isset($_POST["rate2"]))
{
header('Location:lion_king.php');
}
else if(isset($_POST["rate3"]))
{
header('Location:gully_boy.php');
}
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Home page</title>
   </head>
<center>        
  <form name="test" action"" method="post">

   <body>
      <table border = "4" width="60%">
      <h1>Welcome to movie reviews</h1>
         <tr>
            <th>Movie</th>
            <th width="40%">Rating</th>
         </tr>
  
         <tr>
            <td width="1%"> <img src="https://entertainmenttalk.com.au/wp-content/uploads/2016/03/avatar-close-caption-sonogram-studio-02.jpg" border=3 height=250 width=250 </img></td>
<td><h3>Avatar</h3>On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. Because the planet's environment is poisonous, he is drawn into a battle for the survival of her world.<h5>Rating: </h5><input class="alt" value="Click to Rate" name="rate1" type="submit">
  </td>
         </tr>
  
           
  <tr>
            <td><img src="https://www.fanbolt.com/wp-content/uploads/2019/02/Lion-King.jpg" border="3" height="250" width="250"  </img></td>
             <td><h3>The Lion King</h3>This Disney animated feature follows the adventures of the young lion Simba (Jonathan Taylor Thomas), the heir of his father, Mufasa (James Earl Jones). Simba's wicked uncle, Scar (Jeremy Irons), plots to usurp Mufasa's throne by luring father and son into a stampede of wildebeests.<h5>Rating: </h5><input class="alt" value="Click to Rate" name="rate2" type="submit">
  </td>
         </tr>
  
      
         <tr>
            <td><img src="https://www.glamsham.com/Uploads/article/gully-boy-poster-20190627115154685.jpg" border="3" heigth="250" width="250" </img></td>

            <td><h3>Gully Boy</h3>"Gully Boy" is a film about a 22-year-old boy "Murad" from a ghetto in Mumbai, India. The son of a driver, his parents worked hard to get him educated so to inadvertently transcending his class.  <h5>Rating: </h5><input class="alt" value="Click to Rate" name="rate3" type="submit">
  </td>
         </tr>
 

      </table>
   </body>
</form>
</center>   
</html>

