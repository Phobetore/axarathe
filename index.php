<?php
include "_default/header.php";
?>


<body>

  <div class="">
    <span>AXARATHE</span>
  </div>

  <section>

    <a href="/explore">
      <div class="">
          <i class='eos-icons'>explore</i>
          <span>
            En apprendre<br>sur le monde
          </span>
      </div>
    </a>

    <a href="/manage">
      <div class="">
          <i class='eos-icons'>person</i>
          <span>
            Creer/Gerer<br>vos perso
          </span>
      </div>
    </a>
  </section>



  <style>
    body {
      margin: 0;

    }
    body>div {
      color: var(--text-color);
      text-align: center;
      font-size: 4vw;
      font-family: 'MedievalSharp', cursive;
      padding-top: 15vh;
    }
    a div span {
      font-size: 2.15vw;
      font-family: 'Nanum Gothic', sans-serif;
      font-weight: 700 !important;
    }
    a div i {
      min-width: 100%;
      font-size: 10vw !important;
      padding-top: 1vw;
    }
    a div {
      height: 100%;
    }
    a {
      text-decoration: none;
      margin: 7vw;
      margin-top: 2vw;
      background-color: var(--secondary-background-color);
      width: 19vw;
      height: 19vw;
      color: var(--text-color);
      border-radius: 15px;
    }
    a:hover {
      background-color: var(--primary-color);
      width: 18.5vw;
      height: 18.5vw;
    }
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 72vh;
    }
  </style>


</body>


<?php
include "_default/footer.php";
?>
