<?PHP
require_once "consts.php";
require_once("functions.php");

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);
?>

<?PHP render_template("head", $data); ?>
<?PHP render_template ("main", $data); ?>
<?PHP render_template ("style"); ?>
