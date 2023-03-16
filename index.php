<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cruid System</title>
    
</head>
<body>
    <section class="main">
        <h2>CRUID SYSTEM</h2>
    </section>

    <div class="wrap-open-form-new-user mb-3">
        <button type="button" id="btn-open-new-user-form" class="btn btn-dark">NEW USER</button>
    </div>

    <section id="wrap-table"></section>

    <section style="display:none" id="wrap-form-new-user">
        <form class="forme" name="form-new-user" method="POST">
            <p class="info text-center" style="letter-spacing:1px"><strong>NUOVO UTENTE</strong></p>
            <div class="row mb-2">
                <div class="col-6">
                    
                    <label class="form-label" for="new-name">NAME</label>
                    <input id="new-name" class="form-control">
                    <div class="mb-2"><p class="error-msg" id="errName-new"></p></div>
                </div>
                <div class="col-6" >
                    <label class="form-label" for="new-surname">SURNAME</label>
                    <input id="new-surname" class="form-control">
                    <div class="mb-2"><p class="error-msg" id="errSurname-new"></p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label class="form-label" for="new-age">AGE</label>
                    <input type="number"  id="new-age" class="form-control">
                    <div class="mb-2"><p class="error-msg" id="errAge-new"></p></div>
                </div>
                <div class="col-8">
                    
                    <label class="form-label" for="new-mail">MAIL</label>
                    <input  id="new-mail" class="form-control">
                    <div class="mb-2"><p class="error-msg" id="errMail-new"></p></div>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <div class="col-3 text-center">
                    <button id="btn-new-reset" type="button" class="btn btn-outline-danger">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </button>
                </div>
                <div class="col-8 text-center me-1">
                    <button id="btn-new-submit" type="button" class="btn btn-outline-success">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
            <div id="wrap-errors-new-msg-by-server"></div>
        </form>
        
    </section>

    <section style="display:none" id="wrap-form-update-user">

        <form class="forme" name="form-update-user" method="POST">
                <p class="info text-center">Aggiorna utente :<strong><span id="user"></span></strong></p>
                <div class="row mb-2">
                    <div class="col-6">
                        <label class="form-label" for="update-name">NAME</label>
                        <input id="update-name" class="form-control">
                        <div class="mb-2"><p class="error-msg" id="errName-update"></p></div>
                    </div>
                    <div class="col-6" >
                        <label class="form-label" for="update-surname">SURNAME</label>
                        <input id="update-surname" class="form-control">
                        <div class="mb-2"><p class="error-msg" id="errSurname-update"></p></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <label class="form-label" for="update-age">AGE</label>
                        <input type="number" id="update-age" class="form-control">
                        <div class="mb-2"><p class="error-msg" id="errAge-update"></p></div>
                    </div>
                    <div class="col-8">
                        <label class="form-label" for="update-mail">MAIL</label>
                        <input  id="update-mail" class="form-control">
                        <div class="mb-2"><p class="error-msg" id="errMail-update"></p></div>
                    </div>
                </div>
                <div class="row mt-3 mb-2">
                    <div class="col-3 text-center">
                        <button id="btn-update-reset" type="button" class="btn btn-outline-danger">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </button>
                    </div>
                    <div class="col-8 text-center me-1">
                        <button id="btn-update-submit" type="button" class="btn btn-outline-success">
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </div>
                <div id="wrap-errors-update-msg-by-server"></div>
            </form>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>