<?php

#$text = "";
if(isset($_POST['text']) && isset($_POST['flg'])){
    $text = ($_POST['text']);
    $flg = ($_POST['flg']);

    if($flg === "Encode"){
        $res = base64_encode($text);
    }elseif($flg === "Decode"){
        $res = base64_decode($text);
        $ptn = "/<\/textarea>/s";
        if(preg_match($ptn, $res)){
          $replacements = "";
          $res = preg_replace($ptn, $replacements, $res);
          echo "<font color='red'><h4>textarea tag id danger. replacement in BLANK.</h4></font>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Base64Converter | Portfolio Page</title>
        
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/base64.css">

</head>
<body>
    <header>
        <div class="container">
            <div class="header-left">

                <a href="/">
                <img src="/img/logo2.png" alt="logo" />
                </a>

            </div>
            <div class="header-right">

            </div>
        </div>
    </header>
    <main role="main">
        <div class="top-wrapper product">
          <div class="container">
              <h2>主な制作物</h2>
              <p>ふとした時に作るものは</p>
              <p>いつかまた改修したくなるのです</p>
          </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/product.php">Product's</a></li>
              <li class="breadcrumb-item active" aria-current="page">Base64 Converter</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="card mb-12 shadow">
                    <div class="card-header">
                       Base64 Converter 
                    </div>
                    <div class="card-body">
                      <div class="form-class">
                        <form action="#" method="post">

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flg" id="flg1" value="Encode" checked>
                            <label class="form-check-label" for="flg1">Encode</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flg" id="flg2" value="Decode">
                            <label class="form-check-label" for="flg2">Decode</label>
                          </div>
                          <br>
                          <textarea rows="5" cols="50" name="text" placeholder="text"><?php if(!empty($text)){ echo $text; } ?></textarea><br><br>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <pre><textarea rows="5" cols="50" name="res" placeholder="base64 converted text"><?php if(!empty($res)){ echo $res; } ?></textarea></pre>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="message-wrapper">

        </div>
    </main>
    <footer class="text-muted"></footer>
    
    <footer>

    </footer>


</body>
<script src="js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>