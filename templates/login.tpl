 {include file="headerlogin.tpl"}

<body id="pageLogin">
    <div class="container model-dialog text-center">
        <div class="row">
            <div class="col mt-4">
                <h1>Hi!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-4" id="recuadro-login">
                <div class="model-content boxLogin">
                    <div class="col-12 imglogin">
                        <img src="image/avatar.png" alt="avatar">
                    </div>
                    <form class="col-12 m-0 form-login" action="goIn" method="POST">
                        <div class="form-group">
                            <input id="inputPass" type="text" class="form-control" placeholder="email" name="email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="password" name="password" required/>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2 mb-2">Ingresar</button>
                    </form>
                    <div class="col-12">
                        <a href="checkIn" class="registrarte">Registrarte</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>


    {include file="footerAdmin.tpl"}