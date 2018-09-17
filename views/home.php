<main>
    <header class="d-flex align-items-center justify-content-center flex-column">
        <h1 id="title">Reservez en groupe</h1>
        <div class="container-fluid">
            <div class="row">

                <section id="research">
                    <form method="post" action="list.php">
                        <div class="form-group">
                            <label class="reservation-label" for="start_trip">Depart (ville ou pays)</label>
                            <input type="text" class="form-control" name="name" autocomplete="off" id="start_trip"
                                   placeholder="Départ de">
                            <div id="show_up"></div>
                        </div>

                        <div class="form-group">
                            <label class="reservation-label" for="exampleFormControlInput2">Destination (ville ou
                                pays)</label>
                            <input type="text" class="form-control" autocomplete="off" name="name"
                                   id="exampleFormControlInput2"
                                   placeholder="Arrivé à">
                        </div>
                        <div class="form-group">
                            <label class="reservation-label" for="exampleFormControlSelect1">Nombre de passagers</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="reservation-label" for="reservation_start">Date de départ</label>
                                    <input type="date" min="2018-07-20" id="reservation_start">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="reservation-label" for="reservation_back">Date de retour</label>
                                    <input type="date" id="reservation_back">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit">Réserver</button>
                    </form>
                </section>


            </div>
        </div>
    </header>

    <main>
        <section id="info">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info-img">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 h-100" src="assets/image/Island.jpg" alt="Island">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100 h-100" src="assets/image/greece.jpg" alt="greece">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center">
                    <div class="info-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis dignissimos
                            dolore
                            doloribus minima mollitia quas repudiandae suscipit temporibus voluptas. Ab aliquid delectus
                            enim et
                            iste magnam odit reprehenderit veritatis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis dignissimos
                            dolore
                            doloribus minima mollitia quas repudiandae suscipit temporibus voluptas. Ab aliquid delectus
                            enim et
                            iste magnam odit reprehenderit veritatis.</p>
                    </div>
                </div>
            </div>
        </section>

       <?php $query = $db->query('SELECT * FROM category');

       $category = $query->fetch();
       ?>
        <section id="trip">
            <div class="container">
                <h2 id="trip-title"> Choisissez où vous souhaitez aller</h2>
                <div class="row">
                    <div class="col-lg-6 w-100">
                        <div class="categoryImage">
                            <div class="content">
                                <img src="assets/image/mountain.jpg" class="w-100" alt="">
                                <div class="overlay">
                                    <div class="text">Montagnes</div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="categoryImage">
                            <div class="content">
                                <img src="assets/image/islande3.jpg" class="categoryImageEdit w-100" alt="">
                                <div class="overlay">
                                    <div class="text">îles</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="categoryImage">
                            <div class="content">
                                <img src="assets/image/africa.jpg" class=" w-100" alt="">
                                <div class="overlay">
                                    <div class="text">Déserts</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="categoryImage">
                            <div class="content">
                                <img src="assets/image/country.jpg" class=" categoryImageEditTwo w-100" alt="">
                                <div class="overlay">
                                    <div class="text">Grandes Villes</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



