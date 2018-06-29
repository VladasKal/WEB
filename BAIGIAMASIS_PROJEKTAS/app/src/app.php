<?php

if (isset($_POST['action'])) {
  // code...


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";
        $to = "vladas.kalnys@gmail.com";
        $subject = "Nauja zinute";
        $autorius = 'Zinute nuo ' . $vardas . ', ' . $email;
        $zinute = htmlspecialchars($message);
        mail($to, $subject, $autorius, $zinute, $from);
        echo "<scrtipt>alert('Dėkojame Jūsų žinutė gauta.');</scrtip>";
    }
  }


}
  include('db.php');
}
?>
