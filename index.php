<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <meta name="author:" content="Michele Mammucari">
  <title>COVID_19 DEXMA</title>
</head>

<style type="text/css">
  body {}

  #nav {
    border: 2px;
    border-style: solid;
    border-color: black;
    text-align: center;
    overflow: hidden;
    border-left: 0px;
    border-right: 0px;
    background-color: #293133;
  }

  h3 {
    text-align: center;
    color: black;
  }

  li {
    display: inline-block;
    font-size: 2.8vw;
  }

  a {
    text-decoration: none;
    color: white;
  }

  a:hover {
    text-decoration: none;
    color: white;
  }

  .demo-card-wide>.mdl-card__title {
    color: black;
    height: 6vmax;
    background: url(https://www.policlinico.mi.it/uploads/fom/files/virus.jpg) center / cover;
  }
</style>

<body>
  <header>
    <div class="container-fluid" id="nav">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
          <li><a href="index.php">Home</a></li>
        </div>
        <div class="col-4">
          <li><a href="https://dati-covid.italia.it">Info</a></li>
        </div>
        <div class="col-2">
          <li><a href="#">GitHub</a></li>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
  </header>

  <div class="container-fluid" style="margin-top:3%;border-bottom: black;border-width: 3px;border-style: solid;border-left:0px;border-right:0px;border-top:0px;padding-bottom:7%">
    <h3 style="font-size: 4vw;">DATI IMPORTANTI DA INIZIO EPIDEMIA</h3>
    <div class="row" style="text-align: center;margin-top: 2%;">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <div>
              <h2 style="font-size: 2.5vw;">CASI TOTALI DI COVID-19</h2>
            </div>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['totale_casi'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.6vw;">CASI DECEDUTI DI COVID-19</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['deceduti'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row" style="text-align: center;margin-top:3%">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">TOTALE TAMPONI EFFETTUATI</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['tamponi'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">TERAPIA INTENSIVA ATTUALE</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['terapia_intensiva'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>

  <div class="container-fluid" style="margin-top:3%;border-bottom: black;border-width: 3px;border-style: solid;border-left:0px;border-right:0px;border-top:0px;padding-bottom:7%">
    <h3 style="font-size: 4vw;">ULTIMI DATI NAZIONALI</h3>
    <div class="row" style="text-align: center;margin-top: 2%;">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">DATA</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo substr($reverse[9]['data'], 0, 10);
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">ATTUALMENTE POSITIVI</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['totale_positivi'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-4"></div>
    </div>
    <div class="row" style="text-align: center;margin-top:3%">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">ULTIMI CASI DI COVID-19</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['nuovi_positivi'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">ULTIMI DECEDUTI DI COVID-19</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['deceduti'] - $reverse[8]['deceduti'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row" style="text-align: center;margin-top:3%">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">INGRESSI IN TERAPIE INTENSIVE</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['ingressi_terapia_intensiva'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">NUOVI TAMPONI</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['tamponi'] - $reverse[8]['tamponi'];
            ?>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row" style="text-align: center;margin-top:3%">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">TASSO DI POSITIVITA'</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            $percentuale = ($reverse[9]['nuovi_positivi'] / ($reverse[9]['tamponi'] - $reverse[8]['tamponi']) * 100);
            echo substr($percentuale, 0, 4) . "%";
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.5vw;">GUARITI</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            require_once "Andamento.php";
            echo $reverse[9]['dimessi_guariti'] - $reverse[8]['dimessi_guariti'];
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="margin-top: 3%;font-size:2vw;">
    <h3 style="font-size: 4vw;">RESOCONTO ULTIMI 10 GIORNI</h3>
    <div class="row" style="text-align: center;margin-top: 2%;">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.6vw;">Resoconto tamponi ultimi 10 giorni</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            resoconto_tamponi($reverse);
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.6vw;">Resoconto positivi ultimi 10 giorni</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            resoconto_positivi($reverse);
            ?>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
    <div class="row" style="text-align: center;margin-top:3%">
      <div class="col-2"></div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.2vw;">Resoconto ingressi in terapia intensiva negli ultimi 10 giorni</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            resoconto_terapie_intensive($reverse);
            ?>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="demo-card-wide" style="border-style: solid;border-width:2px;">
          <div class="mdl-card__title">
            <h2 style="font-size: 2.2vw;">Resoconto deceduti negli ultimi 10 giorni</h2>
          </div>
          <div style="font-size: 2vw;">
            <?php
            resoconto_deceduti($reverse);
            ?>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>
  </div>

  <footer style="margin-top: 2%;font-size:1.8vw;height:14vmax;background-color:#293133;text-align:center;margin-bottom:0%">
    <strong>
      <h3 style="font-size:2.9vw">Contatti</h3>
    </strong>
    <a href="https://www.instagram.com/____.valhalla.____">Instagram /</a> <a href="https://www.facebook.com/profile.php?id=100004277838708">Facebook</a> <br>
    <a href="mailto:mammucari.michele02@gmail.com">Email di Lavoro</a><br>
    <a href="mailto:micheleironmaiden7@gmail.com ">Altra email</a><br>
  </footer>
</body>

</html>