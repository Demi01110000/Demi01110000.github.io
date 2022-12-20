<h2 class="page-section-heading text-center text-uppercase text-secondary mt-5 mb-4">
    <?=$title?>
</h2>


<div class="row justify-content-center">
    
    <div class="col-lg-12">
        <p>
            Na této části aplikace si vyzkoušíme AJAX volání konkrétního požadavku.<br>
            Formulář odešle email a aplikace ověří, jestli tento email už byl registrován.<br>
            Nebudeme k této akci používat klasický REQUEST, ale AJAX request.
        </p>
    </div>

    <div class="col-lg-6">
<!--        <h2>Registrace</h2>-->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ověření emailu</h5>
                
                <div class="alert alert-info d-none" id="registerTrue">Již jste registrováni</div>
                <div class="alert alert-warning d-none" id="registerFalse">Ještě nejste registrováni</div>
                
                
                <form action="" onsubmit="(e) => console.log(e)" method="post" id="checkEmailForm">
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" required="">
                </div>
                   
                <button type="submit" name="checkEmailSubmit" class="btn btn-primary">Ověřit registraci</button>
              </form>
            </div>
        </div>
    </div>
    
</div>