<?php 
$GLOBALS['title'] = "<H1>Welcome to My Page of Knowledge</H2>";
echo $GLOBALS['title'];
include 'header.php';
?>
<h3>Presents</h3>
<h1>Awesome Number Game</h1>
<form action="#" method="post">
    <label for="years">Enter a number you want to know facts about
    <input type="text" name="year" id="years"></label>
    <input type="submit" >
</form>
<?php if(isset($_POST['year']) && !empty($_POST['year']))
{
    $numberfacts= file_get_contents("http://numbersapi.com/{$_POST['year']}");
  
    echo $numberfacts;
    
        
}
 include 'footer.php';?> 
?>