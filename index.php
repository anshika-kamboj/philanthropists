
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Philantrophists</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/bitproj/proj1.css" />
    <style> </style>
  </head>
  <body>

  <?php
    require 'navbar.php'
    ?>

    <div class="topcontainer">
        
      <h1>ARE YOU </h1>
      <p>a <span class="pro">Philantrophist ?</p>
        <marquee behaviour ="alternate" width="75%" scrollamount ="20">

          <img src="img\poor_1.jpeg">
          <img src="img\poor_2.jpeg">
          <img src="img\poor_3.jpeg">

        </marquee>
</div>
    <hr />
    <div class="midcont1">
      <br />
      <section class="section section-left" id="about">
        <div class="paras">
        <p class="sectionTag text-big"><b>VISION</b></p>
        <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus debitis quibusdam at perspiciatis nemo dolorum numquam, porro delectus aperiam, dicta dolorem quae nobis repudiandae, tenetur culpa voluptatum incidunt cum dolor.</p>
        </div>
        <div class="thumbnail">
            <img src="img\poor_5.jpeg" alt="slums image" class="imgFluid">
        </div> 
        <div class="thumbnail overlay" filter="blur">
          <H4>DONATED?</H4>
          <a href="donation.php">Record here!!</a>
        </div>
    </section>
    </div>
    <div class="middlecontainer">
      <br />
      <h2>
        <em class ="phila"> What is it to be a philantrophist ?</em> 
      </h2>
      <p>
        Is it just to donate some <strong>money</strong> !!! <br>
        
        We say not , it is not just about giving money but also helping and giving care to the ones in need .


        <br />
    </p>

      <hr />
      <h2><em>ABOUT US </em></h2>
      <p>

      </p>
     
      <br />
      <hr />
      <h2>EXPECTED WORK </h2>
      <ol type="a">
        <li>
          <strong> FOOD DELIVERY DRIVE</strong>
          <!-- <img
            
          /> -->
        </li>
        <br /><br />
        <li>
          <strong> BOOKS DONATION  </strong>
        </li>
        <br /><br />
        <li><strong>EDUCATION CAMP </strong></li>
        <br /><br />
        <li><strong>OLD PEOPLE HELP </strong></li>
        <br /><br />
        <li><strong>MONETRAY HELP </strong></li>
        <br /><br />
        <li><strong>MEDICINE HELP  </strong></li>
        <br /><br />
      </ol>
    </div>
    <br />
    <div class="bottomcontainer">
      <br />
      <hr />
    
      <h2>
        <em><strong>Social media profiles</strong></em>
      </h2>
      <strong
        ><a
          class="link"
          href="https://www.linkedin.com/in/sanat-walia-a39b27241/"
          >Linkedin Profile</a
        ></strong
      >
      <br />
      <strong
        ><a class="link" href="https://www.instagram.com/sanat_walia/"
          >Instagram Profile</a
        ></strong
      >
      <br />

    
      <ul></ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
  new Crate({
    server: '1096673971145035800',
    channel: '1096673972000653344'
  })
</script>

  </body>
</html>
