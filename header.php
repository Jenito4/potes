<!DOCTYPE html>
<html lang="cs">
<head>
<title><?php echo $title;?></title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="http://www.potes.cz/foto/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="http://www.potes.cz/foto/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="57×57" href="http://www.potes.cz/foto/favicon.ico"="">
<link rel="apple-touch-icon-precomposed" sizes="72×72" href="http://www.potes.cz/foto/favicon.ico"="">
<link rel="apple-touch-icon-precomposed" sizes="114×114" href="http://www.potes.cz/foto/favicon.ico"="">

<meta name="robots" content="all">
<meta name="description" content="POTES s.r.o., poskytujeme technické služby v požární ochraně a s tím spojený prodej požární techniky a následné provádění kontrol.">
<meta name="keywords" content="POTES s.r.o., potes, potes Sobotín, hasicí technika, servis, kontrola hasicí techniky, bocciolone antincendio">
<meta name="author" content="Jan Mašlej">

<meta property="og:title" content="POTES s.r.o. | technické služby v požární ochraně" />
<meta property="og:description" content="technické služby v požární technice" />
<meta property="og:site_name" content="POTES s.r.o. | technické služby v požární ochraně" />
<meta property="og:image" content="http://www.potes.cz/foto/pot2.jpg" />
<meta property="og:type" content="website" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="/styles.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<header>
<!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light navigace navbar-fixed-top shadow-lg p-3 mb-5 rounded">
        <div class="container">
            <a href="/index.php"><img src="foto/logoBig.jpg" width="auto" alt="Potes s.r.o. - hasící přístroje" height="75"></a>
            <button class="navbar-toggler" type="button" 
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" 
                 id="navbarNavDropdown">
                <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0 nav-fill w-100 navbar-center">
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/sortiment.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SORTIMENT
        </a>
        <ul class="dropdown-menu multi-column columns-2" aria-labelledby="navbarDropdownMenuLink">          
         <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
					            <li><a class="dropdown-item" href="/hasic.php">Hasicí přístroje</a></li>
            <li><a class="dropdown-item" href="/hydrant.php">Požární hydranty</a></li>
            <li><a class="dropdown-item" href="/prislusenstvi.php">Technické prostředky</a></li>
					            <li><a class="dropdown-item" href="/propan.php">Propan-butan a CO<sub>2</sub></a></li>
            <li><a class="dropdown-item" href="/hlasic.php">Požární hlásiče</a></li>
            <li><a class="dropdown-item" href="/tabulka.php">Bezpečnostní tabulky</a></li>
            <li><a class="dropdown-item" href="/sorbcniLatky.php">Sorbční látky</a></li>
            <li><a class="dropdown-item" href="/meraky.php">Bocciolone antincendio</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
					            <li><a class="dropdown-item" href="/ucpavky.php">Protipožární ucpávky</a></li>
            <li><a class="dropdown-item" href="/lahve.php">Tlakové lahve</a></li>
            <li><a class="dropdown-item" href="/lekarnicky.php">Lékárničky</a></li>
            <li><a class="dropdown-item" href="/dvere.php">Požární dveře</a></li>
            <li><a class="dropdown-item" href="/tabulka.php">Bezpečnostní tabulky</a></li>
            <li><a class="dropdown-item" href="/special.php">Speciální přístroje</a></li>
            <li><a class="dropdown-item" href="/ostatni.php">Ostatní</a></li>
				            </ul>
			            </div>     
		            </div>
          
        </ul>       
      </li>
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/sluzby.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SLUŽBY
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="/kontrola.php">Montáže a kontroly</a></li>
          <li><a class="dropdown-item" href="/revize.php">Revize požárních dveří a klapek</a></li>
          <li><a class="dropdown-item" href="/pozarniOchrana.php">Dokumentace - požární ochrana</a></li>
          <li><a class="dropdown-item" href="/bezpecnostPrace.php">Dokumentace - bezpečnost práce</a></li>
        </ul>
      </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                           href="/vyrobci.php">
                          VÝROBCI
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                           href="/kontakt.php">
                          KONTAKT
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link"
                          href="/kontakt.php">
                          <i class="fa">&#xf095;</i> 583 237 126&emsp;
        &emsp;<i class="fa">&#xf095;</i> 608 733 104
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                          href="/kontakt.php">
                          <i class="fa">&#xf0e0;</i> potes<!-- -->@potes.cz
                        </a>
                    </li>
                </ul>              
            </div>
        </div>
    </nav>
</header>    