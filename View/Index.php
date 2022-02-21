<?php require_once "head.php";?>


<main>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">

            <img src="../public/img/bg-animal.jpg" alt="bg-animals" style="object-fit: cover;filter: blur(4px);object-position: center -400px">

            <div class="container">
                <div class="carousel-caption text-start text-dark" >
                    <h1>Besoin d'un nouveau copain ?</h1>
                    <p>Vous vous sentez seul et vous avez besoin d'un compagnon venez nous rendre visite et trouver votre copain</p>
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <p><a class="btn btn-lg btn-primary" href="../Controller/NavigationController.php?register">Inscris toi aujourd'hui</a></p>
                    <?php else : ?>
                        <p><a class="btn btn-lg btn-primary" href="../Controller/AnimalsController.php?list">Découvre les tous</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <img src="../public/img/bg-foret.jpg" alt="bg-animals" style="object-fit: cover;filter: blur(3px);object-position: center bottom">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Découvrir nos activité</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">En savoir plus</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <img src="../public/img/bg-chat.jpg" alt="bg-animals" style="object-fit: cover;filter: blur(3px);object-position: center">

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>Les jouets de nos amis</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="../Controller/BoutiqueController.php?list">Découvrir la boutique</a></p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../public/img/chien.jpg" alt="tete de chien" style="object-fit: cover">

            <h2>Chien</h2>
            <p>Venez découvrir nos amies les chiens.</p>
            <p><a class="btn btn-secondary" href="#">Voir plus &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../public/img/chat.jpg" alt="tete de chien" style="object-fit: cover;object-position: top">

            <h2>Chat</h2>
            <p>Venez découvrir nos amies les chats.</p>
            <p><a class="btn btn-secondary" href="#">Voir plus &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../public/img/lapin.jpg" alt="tete de chien" style="object-fit: cover;object-position: -20px">

            <h2>lapin</h2>
            <p>Venez découvrir nos amies les lapins.</p>
            <p><a class="btn btn-secondary" href="#">Voir plus &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
            <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>

<?php require_once "footer.php"; ?>
