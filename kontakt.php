<?php
  $title = "Kontakt | POTES s.r.o.";
  include_once("header.php");
?>

<div class="karty" id="tour">
 <div class="container">
    <div class="pagePadding">      
     <br /><br /> 
      <h2>KONTAKT</h2> 
      <span class="teckyKarty d-flex justify-content-center"><a href="/index.php" class="linkRoute">Úvod</a>&emsp;&#60;&emsp;</span>
      <span class="teckyKarty d-flex justify-content-center">&#8213;&#8213;&#8213;</span>
       <br /><br />
       
     <?php
          if(isset($_GET["ok"])){
          ?>
          <div class="alert alert-success d-flex justify-content-center font-weight-bold" role="alert">
            <p>Děkujeme za dotaz! Budeme se Vám snažit co nejdříve odpovědět.</p>
          </div>
          <?php
          }
        ?>
  
  <div class="row">
    <div class="col-md-6">
      <h2 class="pKarty">KONTAKTNÍ ÚDAJE</h2>
    <span class="teckyKarty d-flex justify-content-center">&#8213;&#8213;&#8213;</span>
     <br />
              <b class="d-flex justify-content-center">POTES s.r.o.</b>
              <p class="centerText">Telefon: 583 237 126<br />
              Telefon sklad: 608 733 104<br />
              E-mail: potes@potes.cz<br />
              IČO: 26849011<br />
              DIČ: CZ26849011</p><br />             
              <b class="d-flex justify-content-center">Sídlo společnosti:</b>
              <p class="centerText">Sobotín 213, 788 16 Sobotín</p><br />
              <b class="d-flex justify-content-center">Otevírací doba:</b> 
              <p class="centerText">pondělí - pátek<br />
              6:00 - 14:30</p><br />
    </div>
    <div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d34517.27288135511!2d16.98345544597439!3d49.98301608191255!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1b1bade3911f8d1a!2sPotes%20S.r.o.!5e0!3m2!1scs!2scz!4v1627990507972!5m2!1scs!2scz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
    <br /><br />
  <div class="row">
    <div class="col-md-6">
        <h2 class="pKarty">NAPIŠTE NÁM!</h2>
    <span class="teckyKarty d-flex justify-content-center">&#8213;&#8213;&#8213;</span>
    <br /><br />
     <p class="text-center">Máte nějaký dotaz? Zavolejte nám, nebo nám napište na e-mail a my Vám rádi odpovíme.</p><br /> 
    </div>
    <div class="col-md-6">

     <form action="/php/mail.php" method="post">
                  <input type="text" class="form-control" name="jmeno" placeholder="Jméno a příjmení..." required /><br />
                  <input type="tel" class="form-control" name="telefon" minlength="9" maxlength="16" placeholder="Telefon..." required /><br />
                  <input type="email" class="form-control" name="email" placeholder="E-mail..." required /><br />
                  <textarea name="zprava" class="form-control" name="zprava" placeholder="Jaký je váš dotaz?" maxlength="200" style="height:150px;" required /></textarea><br />
                  <div class="text-center">
                    <button class="button" type="submit" value="ODESLAT">ODESLAT</button><br /><br />
                  </div>
        </form>
    </div>
  </div>
  
  <div class="col-sm">
      
    </div>

         
    </div>
  </div>

</div>
  
<?php
  include_once("footer.php");
?>