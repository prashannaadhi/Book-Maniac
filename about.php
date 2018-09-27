<html>
<head>
</head>
<body>
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <?php
              $myfile = fopen("about.txt", "r") or die("Unable to open file!");
              echo fgets($myfile);
              fclose($myfile);
              ?>
          </div>  
        </div>
      </div>
    </section>
</body>
</html>