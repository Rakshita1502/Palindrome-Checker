<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style media="screen">
    body{
      background-color: #29bb89;
      display: flex;
      justify-content: space-around;
    }
    .abc{
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: space-around;

    }
    h3{
      margin-top: -40px;
    }
    .mnp{
      width:100%;
      height:100%;
    }
      .maindiv{
        background-color: #feffde;
        width: 40vw;
        height: 70vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: auto;
        border-radius: 5px;
      }
      .btn{
        margin-top: 20px;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="abc">
      <div class="maindiv">
        <h3>Palindrome Checker</h3>
        <?php

        if(isset($_POST['submit'])){
          $word=$_POST['data'];

          $rword=strrev($word);

          if($word===$rword){
            echo "<p>
            This is a palindrome
            </p>";
          }
          else{
            echo "<p>
            This is not a palindrome
            </p>";
          }

        }

         ?>

        <form class="" action="" method="post">
          <div class="input-group mnp">
            <input type="text" name="data" class="form-control mnp"  aria-label="Recipient's username"  aria-describedby="button-addon2" placeholder="Enter the word">
          </div>

          <button type="submit" name="submit" class="btn btn-success">Check</button>


        </form>


      </div>
    </div>

  </body>
</html>
