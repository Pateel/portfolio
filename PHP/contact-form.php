

<?php

/*Revisit when adding Form with Method=Post via PHP.*/

if (isset($_POST['submit'])) {
  $name = $_POST['first-name'];
  $name = $_POST['last-name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  $mailTo ="pateelb@outlook.com";
  $headers = "From: ".$mailFrom;

  mail($mailTo, $message, $email);
  header ("Location: contact-form.php?mailsend");

}

/*Add in HTML*/

<section class="contact">
  <h3>Let's Connect</h3>
  <form action="contact-form.php" method="post">
    <legend>Your Information</legend>
    <fieldset> 
        <label>First Name
          <input type="text" name="first-name" placeholder="Type First Name">*</label> <br>
        <label>Last Name
          <input type="text" name="last-name" placeholder="Type Last Name">*</label><br>
        <label>Email
          <input type="text" name="email" placeholder="Type Email Address">*</label>
    </fieldset>
        <br>
        <label>Comments (max 150 words)</label> <br>
        <textarea name="message" placeholder="message"></textarea>
        <br>
        <button type="submit" name="submit">SEND</button>
  </form>
</section>


