<?PHP
require_once "consts.php";
require_once("functions.php");

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);
?>

<?PHP require "sections/head.php"; ?>
<?PHP require "sections/main.php"; ?>
<?PHP require "sections/style.php"; ?>
