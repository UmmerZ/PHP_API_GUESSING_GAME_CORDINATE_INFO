<?php 
$GLOBALS['title'] = "<H1>Welcome to My Page of Knowledge</H2>";
echo $GLOBALS['title'];
include 'header.php';



?>
<h1>Find out Sunset and Sunrise by Latiitude and Longitude</h1>

<form action="#" method="post">
    <label for="country">Enter Latitude
        <input type="text" name= "lat" id="country">
    </label>
    <label for="country">Enter Longitude
        <input type="text" name= "long" id="country">
    </label>
    <input type="submit" value="Submit">
</form>
<?php 
if (isset($_POST['lat']) && isset($_POST['long']) ){

    $sunRiseSunSet = file_get_contents("https://api.sunrise-sunset.org/json?lat={$_POST['lat']}&lng={$_POST['long']}");
    if($sunRiseSunSet)
    {
        $sunTiming = json_decode($sunRiseSunSet,true);
     
       
?>

    
<h2>Sunset time :</h2>
<?php foreach($sunTiming as $timing) : ?>
<?php echo $timing["sunset"]?>
 <h2>Sunrise Time:</h2>
 <?php echo $timing["sunrise"]?>
 <h2>Day Length:</h2>
 <?php echo $timing["day_length"]?>
<?php  endforeach;
?>

<?php include 'footer.php';}} 
?>
