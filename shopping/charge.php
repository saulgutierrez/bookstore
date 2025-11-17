<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php require "../vendor/autoload.php"; ?>

<?php
    if (isset($_POST['email'])) {

        \Stripe\Stripe::setApiKey($secret_key);

        $charge = \Stripe\Charge::create([
            'source' => $_POST['stripeToken'],
            'amount' => $_SESSION['price'] * 100,
            'currency' => 'mxn',
        ]);


        echo "paid";
        if (empty($_POST['email']) OR empty($_POST['username']) OR empty($_POST['fname']) OR empty($_POST['lname'])) {
            echo "<script>alert('One or more inputs are empty');</script>";
        } else {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $token = $_POST['stripeToken'];
            $price = $_SESSION['price'];
            $user_id = $_SESSION['user_id'];

            $insert = $conn->prepare("INSERT INTO orders(email, username, fname, lname, token, price, user_id) VALUES(:email, :username, :fname, :lname, :token, :price, :user_id)");
            $insert->execute([
                ':email' => $email,
                ':username' => $username,
                ':fname' => $fname,
                ':lname' => $lname,
                ':token' => $token,
                ':price' => $price,
                ':user_id' => $user_id,
            ]);
        }
    }
?>