<h2 class="page-section-heading text-center text-uppercase text-secondary mt-5 mb-4">
    <?=$title?>
</h2>


<div class="row justify-content-center">
    
    <div class="col-lg-12">
        <p>Nejvýznamnější částí hradu je v současnosti gotická katedrála sv. Václava a částečně dochovaný románský palác s architektonicky cenným provedením okenních otvorů. 
            Z hradu se ještě na ploše Václavského náměstí dochovaly i zbytky románské hradby na jih od katedrály. 
            Monumentálně dodnes působí pozůstatky hradu ze severní a severovýchodní strany, kde se na skalnatém ostrohu vypínají kamenné hradby, 
            pozůstatek obvodové zdi románského paláce s okny, gotický arkýř, Okrouhlá věž a další budovy nesoucí hradní prvky. 
            Areál hradu (budovy kapitulního děkanství) i katedrála v současnosti procházejí generální rekonstrukcí. 
            Pro návštěvníky je přístupná katedrála s výstavou v kryptě. </p>
    </div>

    <div class="col-lg-8">
        <h2>Registrace</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Registrační formulář</h5>
                
                <?php if (isset($registerResult)):?>
                    <div class="alert alert-success">
                        <?=$registerResult?>
                    </div>
                <?php endif;?>
                
                
                <form action="" method="post">
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" aria-describedby="emailHelp" required="">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                    
                    
                <div class="mb-3">
                    <h4>Katedrálou v Olomouci je:</h4>
                    <select class="form-select" name="select" aria-label="Default select example">
                        <option selected>Vyberte jednu z nabízených možností</option>
                        <option value="1">Kostel sv. Gorazda</option>
                        <option value="2">Kostel sv. Mořice</option>
                        <option value="3">Kostel sv. Václava</option>
                        <option value="4">Kostel sv. Michala</option>
                      </select>
                </div>

                <div class="mb-3 form-check">
                  <input type="checkbox" name="agreement" required="" class="form-check-input">
                  <label class="form-check-label">Souhlas se zpracováním Osobních údajů</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Chci dostávat newsletter
                </label>
                </div>
                  <p><br></p>
                  
                <button type="submit" name="registerSubmit" class="btn btn-primary">Provést registraci</button>
              </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <h2>Fotogalerie</h2>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-4ad9d59b-01fe-4ea9-980c-6d5c8304f2b9"></div>
    </div>

</div>