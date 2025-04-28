
    <!DOCTYPE html>
    <html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imovinskopravni status</title>
        <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
    
    
        
            <div id="overlay">
            <h1>Katastarski i imovinskopravni status na česticama</h1>
    </div>

    <div class="zaglavlje">

        <form class="form" id="form" method="POST"> 
        <label>Broj k.č.: </label><input type="text" name="brojkc" placeholder="/"/><br><br>
        <label>Kultura: </label><input type="text" name="kultura" placeholder="oranica"/> <br><br>
        <label>Površina k.č. [m2/čhv]: </label><input type="text" name="povrsina" placeholder=""/> <br><br>
        <label>Broj posjedovnog lista: </label><input type="text" name="brojpl" placeholder=""/> <br><br>
        <label>Katastarska općina: </label><input type="text" name="naziv_ko" placeholder=""/> <br><br>
        <label> Posjednik:</label>  <select name="posjednik" id="choice" >
                <option value="-">---</option>
                <option value="HŽ-Hrvatske željeznice d.o.o., Mihanovićeva 12, Zagreb">HŽ-Hrvatske željeznice d.o.o., Mihanovićeva 12, Zagreb</option>
                <option value="Republika Hrvatska">Republika Hrvatska</option>
                <option value="Republika Hrvatska - javno dobro u općoj uporabi">Republika Hrvatska - javno dobro u općoj uporabi</option>
                <option value="Javno dobro u općoj uporabi u vlasništvu Republike Hrvatske na upravljanju HŽ Infrastruktura d.o.o., Mihanovićeva 12, 10000 Zagreb">Javno dobro u općoj uporabi u vlasništvu Republike Hrvatske na upravljanju HŽ Infrastruktura d.o.o., Mihanovićeva 12, 10000 Zagreb</option>
                <option value="Javno dobro u općoj uporabi - željeznička infrastruktura, Republika Hrvatska - upravlja HŽ Infrastruktura d.o.o., Zagreb">Javno dobro u općoj uporabi - željeznička infrastruktura, Republika Hrvatska - upravlja HŽ Infrastruktura d.o.o., Zagreb</option>
                <option value="Republika Hrvatska - javno dobro u općoj uporabi pod upravljanjem HŽ Infrastruktura d.o.o. OIB: 39901919995, Zagreb, Mihanovićeva 12">Republika Hrvatska - javno dobro u općoj uporabi pod upravljanjem HŽ Infrastruktura d.o.o. OIB: 39901919995, Zagreb, Mihanovićeva 12</option>
                <option value="Hrvatske željeznice, sek. za odr. pruga">Hrvatske željeznice, sek. za odr. pruga</option>
                <option value="Hrvatske željeznice, Zagreb, Knin">Hrvatske željeznice, Zagreb, Knin</option>
                <option value="HŽ Infrastruktura d.o.o. OIB:39901919995, Zagreb, Mihanovićeva 12">HŽ Infrastruktura d.o.o. OIB:39901919995, Zagreb, Mihanovićeva 12</option>
                <option value="Društveno vlasništvo">Društveno vlasništvo</option>
                <option value="">Ništa od navedenog</option>
            </select>    
        <br>
        <br>
        <br>  
            <label>Broj zk.č.: </label><input type="text" name="brojzkc" placeholder="/"/><br><br>
            <label>Kultura: </label><input type="text" name="zkkultura" placeholder="oranica"/> <br><br>
            <label>Površina zk.č.: [m2/čhv] </label><input type="text" name="zkpovrsina" placeholder=""/> <br><br>
            <label>Broj zk. uloška: </label> <input type="text" name="brojzku" placeholder=""/> <br><br>
            <label>Zemljišno-knjižna općina:</label> <input type="text" name="naziv_zko" placeholder=""/> <br><br>
            <label>Vlasnik: </label>
                    <select name="vlasnik" id="choice" >
                        <option value="-">---</option>
                        <option value="HŽ-Hrvatske željeznice d.o.o., Mihanovićeva 12, Zagreb">HŽ-Hrvatske željeznice d.o.o., Mihanovićeva 12, Zagreb</option>
                        <option value="Republika Hrvatska">Republika Hrvatska</option>
                        <option value="Republika Hrvatska - javno dobro u općoj uporabi">Republika Hrvatska - javno dobro u općoj uporabi</option>
                        <option value="Javno dobro u općoj uporabi u vlasništvu Republike Hrvatske na upravljanju HŽ Infrastruktura d.o.o., Mihanovićeva 12, 10000 Zagreb">Javno dobro u općoj uporabi u vlasništvu Republike Hrvatske na upravljanju HŽ Infrastruktura d.o.o., Mihanovićeva 12, 10000 Zagreb</option>
                        <option value="Javno dobro u općoj uporabi - željeznička infrastruktura, Republika Hrvatska - upravlja HŽ Infrastruktura d.o.o., Zagreb">Javno dobro u općoj uporabi - željeznička infrastruktura, Republika Hrvatska - upravlja HŽ Infrastruktura d.o.o., Zagreb</option>
                        <option value="Republika Hrvatska - javno dobro u općoj uporabi pod upravljanjem HŽ Infrastruktura d.o.o. OIB: 39901919995, Zagreb, Mihanovićeva 12">Republika Hrvatska - javno dobro u općoj uporabi pod upravljanjem HŽ Infrastruktura d.o.o. OIB: 39901919995, Zagreb, Mihanovićeva 12</option>
                        <option value="Hrvatske željeznice, sek. za odr. pruga">Hrvatske željeznice, sek. za odr. pruga</option>
                        <option value="Hrvatske željeznice, Zagreb, Knin">Hrvatske željeznice, Zagreb, Knin</option>
                        <option value="HŽ Infrastruktura d.o.o. OIB:39901919995, Zagreb, Mihanovićeva 12">HŽ Infrastruktura d.o.o. OIB:39901919995, Zagreb, Mihanovićeva 12</option>
                        <option value="Društveno vlasništvo">Društveno vlasništvo</option>
                        <option value="">Ništa od navedenog</option>
                    </select>  
                    <br>
                    <br>
                    Je li čestica unutar infrastrukturnog pojasa? <select name="pojas">
                        <option value="nalazi se unutar infrastrukturnog pojasa i kao takva predstavlja željezničku infrastrukturu.">DA</option>
                        <option value="ne nalazi se unutar infrastrukturnog pojasa i kao takva ne predstavlja željezničku infrastrukturu.">NE</option>
                    </select>                                      
                      <br><br>
            <input type="submit" name ="submitbtn" id="submitbtn" value="Pošalji"/> 
            <input type="button" id="gumb" value="Poništi" onclick="Ponisti()"/>
    </form>
    <br>
    
    </div>


    <div class="output">
    <span class="tooltip" id="tooltip">Kopiraj tekst</span>
    
    <?php


    if(isset($_POST['submitbtn'])){
        if(!empty($_POST['brojkc']) && !empty($_POST['kultura']) && !empty($_POST['povrsina']) && !empty($_POST['brojpl']) && !empty($_POST['naziv_ko']) && !empty($_POST['posjednik']) && !empty( $_POST['brojzkc']) && !empty($_POST['zkpovrsina']) && !empty($_POST['brojzku']) && !empty($_POST['naziv_zko']) && !empty($_POST['vlasnik'])&& !empty($_POST['pojas'])){


        $brojkc=$_POST['brojkc'];
        $kultura = $_POST['kultura'];
        $povrsina =$_POST['povrsina'];
        $brojpl = $_POST['brojpl'];
        $naziv_ko = $_POST['naziv_ko'];
        $posjednik = $_POST['posjednik'];

        $brojzkc = $_POST['brojzkc'];
        $zkkultura =$_POST['zkkultura'];
        $zkpovrsina =$_POST['zkpovrsina'];
        $brojzku = $_POST['brojzku'];
        $naziv_zko = $_POST['naziv_zko'];
        $vlasnik = $_POST['vlasnik'];
        $pojas = $_POST['pojas'];

        echo "<p>K.č. br. $brojkc , $kultura, površine $povrsina upisana je u posjedovni list br. $brojpl k.o. $naziv_ko kao posjed $posjednik.</p>";
            echo "<p>Zk.č. br. $brojzkc, $zkkultura, površine $zkpovrsina upisana je u posjedovni list br. $brojzku k.o. $naziv_zko kao posjed $vlasnik.</p>";
            echo "<p>Sukladno Odluci HŽ Infrastrukture d.o.o. o određivanju granica infrastrukturnog pojasa br.: UI-3-9/08 od 04.02.2008. godine, k.č. $brojkc k.o. $naziv_ko  $pojas</p>";

                                            
        } else{
        echo "<h4>Ispunite sva polja!</h4>";
        } 
        {
        echo "";
        }
        }
    ?>

    </div>
   



            <script>
                function Ponisti(){
                    document.getElementById('form').reset();
                }

                        
                        document.querySelector('p').addEventListener('mouseover',()=>{
                        document.getElementById('tooltip').style.visibility = "visible";
                    });
                
                    
                    </script>

    </body>

    </html>