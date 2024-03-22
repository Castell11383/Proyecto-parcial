<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
</head>

<body class="p-5 bg-secondary bg-subtle">
    <div class="row p-5 bg-black bg-gradient rounded">

        <!-- PRIMER ROW -->
        <div class="col-6 p-3 bg-primary bg-gradient rounded">

            <!-- NAVBAR PRIMER COL CON SU NAVBAR-->
            <nav class="navbar bg-dark bg-gradient rounded">

                <!-- CONTENEDOR DEL FORMULARIO, CARRUSEL Y ACORDEON -->
                <div class="container">
                    <a class="navbar-brand mx-auto">

                        <!-- ICNOCOS DEL NAVBAR -->
                        <div class="row mx-auto">

                            <div class="col-2">
                                <button type="button" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
                                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z" />
                                        <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z" />
                                    </svg></button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3m-8.322.12q.322-.119.684-.12h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981z" />
                                    </svg></button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-warning"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2" />
                                        <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a13 13 0 0 1 1.313-.805h.632z" />
                                    </svg></button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                    </svg></button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                        <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708" />
                                    </svg></button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                    </svg></button>
                            </div>
                        </div>
                    </a>
                </div>
            </nav>

            <!-- ICONO DEL FORMULARIO -->
            <div class="row mx-auto p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle text-light " viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </div>

            <!-- TITULO DEL FORMULARIO -->
            <h7>
                <p class="text-center text-light">Formulario de Información Personal</p>
            </h7>

            <!-- FORMULARIO DEL PRIMER CONTENEDOR -->
            <form id="formulario" method="post">
                <div class="row">
                    <div class="col-4 text-center ">
                        <label for="text" class="form-label text-light">Nombre 1:</label>
                        <input class="form-control text-center" name="nombre1" placeholder="Marta">
                    </div>
                    <div class="col-4 text-center ">
                        <label for="text" class="form-label text-light">Nombre 2:</label>
                        <input class="form-control text-center" name="nombre2" placeholder="Julia">
                    </div>
                    <div class="col-4 text-center ">
                        <label for="number" class="form-label text-light">Catálogo:</label>
                        <input class="form-control text-center" name="catalogo" placeholder="xxxxxx">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 text-center ">
                        <label for="text" class="form-label text-light">Apellido 1:</label>
                        <input class="form-control text-center" name="apellido1" placeholder="Tepehu">
                    </div>
                    <div class="col-4 text-center ">
                        <label for="text" class="form-label text-light">Apellido 2:</label>
                        <input class="form-control text-center" name="apellido2" placeholder="Otonka">
                    </div>
                    <div class="col-4 text-center text-light">
                        <label for="email" class="form-labe text-light">Correo:</label>
                        <input class="form-control text-center" name="email" placeholder="xxxxxx@xmail.com">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 text-center text-light">
                        <label for="number" class="form-lab text-light">Edad:</label>
                        <input class="form-control text-center" name="edad" placeholder="años">
                    </div>
                    <div class="col-3 text-center ">
                        <label for="text" class="form-label text-light text-center">Género</label>
                        <select class="form-select" name="genero" aria-label="Default select example">
                            <option selected class="text-center">Género:</option>
                            <option value="Maculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-3 text-center ">
                        <label for="text" class="form-label text-light text-center">Grado:</label>
                        <select class="form-select" name="grado" aria-label="Default select example">
                            <option selected class="text-center">Select</option>
                            <option value="Subteniente">Subteniente</option>
                            <option value="Teniente">Teniente</option>
                            <option value="Capitán 2do.">Capitán 2do.</option>
                            <option value="Capitán 1ero">Capitán 1ero.</option>
                            <option value="Mayor">Mayor</option>
                            <option value="Tte. Cnel.">Tte. Cnel.</option>
                            <option value="Coronel">Coronel</option>
                            <option value="Gnal. de Brg.">Gnal. de Brg.</option>
                            <option value="Gnal. de Div">Gnal. de Div.</option>
                            <option value="Alf. Fragata">Alf. Fragata</option>
                            <option value="Alf. Navío">Alf. Navío</option>
                            <option value="Tte. de Fragata">Tte. de Fragata</option>
                            <option value="Tte. de Navío">Tte. de Navío</option>
                            <option value="Cap. de Corbeta">Cap. de Corbeta</option>
                            <option value="Cap. de Fragata">Cap. de Fragata</option>
                            <option value="Cap. de Navío">Cap. de Navío</option>
                            <option value="Vicealmirante">Vicealmirante</option>
                            <option value="Almirante">Almirante</option>
                        </select>
                    </div>
                    <div class="col-4 text-center ">
                        <label for="text" class="form-label text-light text-center">Arma:</label>
                        <select class="form-select" name="arma" aria-label="Default select example">
                            <option selected class="text-center">Select</option>
                            <option value="Infantería">Infantería</option>
                            <option value="Aviación">Aviación</option>
                            <option value="Marina">Marina</option>
                            <option value="Caballería">Caballería</option>
                            <option value="Artilleria">Artillería</option>
                            <option value="Ingenieros">Ingenieros</option>
                            <option value="Policía Militar">Policía Militar</option>
                            <option value="TT.MM.">TT.MM.</option>
                            <option value="M.G.">M.G.</option>
                            <option value="Intendencía">Intendencía</option>
                            <option value="Sanidad Militar">Sanidad MIlitar</option>
                        </select>
                    </div>
                    <div class="col-5 text-center ">
                        <label for="text" class="form-label text-light text-center">Dependencia:</label>
                        <select class="form-select" name="depe" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1ra. Brg. de Inf. 'GLGL'">1ra. Brg. de Inf. "GLGL"</option>
                            <option value="2da. Brg. de Inf. 'CGRC'">2da. Brg. de Inf. "CGRC"</option>
                            <option value="3RA. Brg. de Inf. 'GMMAS'">3ra. Brg. de Inf. "GMMAS"</option>
                            <option value="4TA. Brg. de Inf. 'GJRB'">4ta. Brg. de Inf. "GJRB"</option>
                            <option value="5ta. Brg. de Inf. 'MGS'">5ta. Brg. de Inf. "MGS"</option>
                            <option value="6ta. Brg. de Inf. 'CAJI'">6ta. Brg. de Inf. "CAJI"</option>
                            <option value="7ma. Brg. de Inf. 'GKELG'">7ma. Brg. de Inf. "GKELG"</option>
                            <option value="Brigada Militar 'MZ'">Brigada Militar "MZ"</option>
                            <option value="BEOS 'TCVAQA'">Brigada Especial de Operaciones de Selva "TCVAQA"</option>
                            <option value="Brigada de Paracaidistas 'FC'">Brigada de Paracaidistas "FC"</option>
                            <option value="1ra. Brg. de PM 'GH'">1RA. BRG. de Policía Militar "GH"</option>
                            <option value="2da. Brg. de PM 'GDHAGM'">Segunda Brigada de Policía Militar "GDHAGM"</option>
                            <option value="BFE 'GBPNH'">Brigada de Fuerzas Especiales "GBPNH"</option>
                            <option value="BOM 'GJRMB'">Brigada de Operaciones para Montaña "GJMRB"</option>
                            <option value="TT.MM.">Comando de Comunicaciones del Ejército</option>
                            <option value="CIEG 'TCIFVA'">Cuerpo de Ingenieros del Ejército "TCIFVA"</option>
                            <option value="CTE">Cuerpo de Transporte del Ejército</option>
                            <option value="Guardia Presidencial">Guardia Presidencial</option>
                            <option value="RM">Reservas Militares de la República</option>
                            <option value="CAL">Comando de Apoyo Logístico</option>
                            <option value="CREOMPAZ">Comando Regional de Entrenamiento de Operaciones de Mantenimiento de Paz
                            </option>
                            <option value="CIT">Comando de Informática y Tecnología</option>
                        </select>
                    </div>
                    <div class="col text-center text-light">
                        <p><label for="text">Cursos:</lab text-lightel>
                        </p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label text-light" for="inlineCheckbox1" name="curso1">Kaibil</label>
                            <input class="form-check-input bg-dark" type="checkbox" id="inlineCheckbox1" name="curso1" value="Kaibil">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label text-light" for="inlineCheckbox2" name="curso2">Paracaidismo </label>
                            <input class="form-check-input bg-dark" type="checkbox" id="inlineCheckbox2" name="curso2" value="Paracaidismo">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label text-light" for="inlineCheckbox2" name="curso3">Informatica </label>
                            <input class="form-check-input bg-dark" type="checkbox" id="inlineCheckbox2" name="curso3" value="Paracaidismo">
                        </div>
                    </div>
                </div>
                <div class="mx-auto p-2 text-center">
                    <button type="Submit" class="btn btn-danger">Enviar</button>
                </div>
            </form>

        </div>

        <!-- SEGUNDO ROW -->
        <!-- CARRUSEL DE IMAGENS EN EL SEGUNDO CONTENEDOR -->
        <div class="col-6 p-4 bg-success bg-gradient rounded">
            <div class="row">
                <div class="col-6 mt-2 bg-dark bg-gradient p-2 text-dark bg-opacity-50 rounded">
                    <div id="carouselExampleCaptions" class="carousel slide">

                        <!-- IMAGENES CARROUSEL -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="./images/1era.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2BI.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/2BPM.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/3brigada.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/4BI.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/5BI.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/6BI-COLOR.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/7a Brigada-01.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/beom.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/BEOS.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/BEOS.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/BMMZ-C.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/BFE.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/bpgfc.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/BPMGH.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/CAL.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/CCEG.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/CIEG-COLOR.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/Divisa.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/gp.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src=".//images/rrmm.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/transportes.png" class="d-block w-100" height="383" width="300">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BOTONES IMAGENES 1 -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active mb-5px" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12" aria-label="Slide 13"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13" aria-label="Slide 14"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14" aria-label="Slide 15"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15" aria-label="Slide 16"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="16" aria-label="Slide 17"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="17" aria-label="Slide 18"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="18" aria-label="Slide 19"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="19" aria-label="Slide 20"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="20" aria-label="Slide 21"></button>
                    </div>

                    <!-- BOTONES IMAGENES 2 -->
                    <div class="row">
                        <div class="col">
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>

                <!-- INICIA EL ACOORDEON -->
                <div class="col-6 mt-2 bg-dark bg-gradient rounded p-4 ">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-danger bg-gradient rounded text-light text-center">
                            <div class="accordion-header">
                                <div class="accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="true" aria-controls="collapseOne">
                                    Dependencias Militares
                                </div>
                            </div>
                        </div>

                        <!-- CARROUSEL DE ACOORDEON -->
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">

                                <!-- PRIMER CARROUSEL ACORDEON -->
                                <div class="carousel-item active">
                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                1ra. Brig. de Inf. "GLGL"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La primera guarnición que existió en el departamento de Petén, fue la que dejó el señor Melchor de Mencos en el año 1,763 con cincuenta (50) hombres, esta unidad tuvo que actuar cuando los piratas ingleses ingresaban en territorio petenero y establecían campamentos adereros. Mediante Decreto de fecha 16 de junio de 1,829, al departamento de Petén como parte de las Verapaces le correspondió un Batallón de Infantería, el cual fue dividido en la siguiente forma una (1) Compañía para Cobán, una (1) Compañía para Salamá y una (1) Compañía para Petén, la cual tuvo su sede en Ciudad Flores.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                2da. Brig. de Inf. "CGRC"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Segunda Brigada de Infantería, "CGRC", Zacapa, conducirá operaciones bélicas y no bélicas, en apoyo a la misión constitucional del Ejército de Guatemala, basados en los Artículos 244 y 249, desarrollando una eficiente defensa, cooperación institucional, administración, profesionalización y proyección en su área de responsabilidad, y a orden del Estado Mayor de la Defensa Nacional en cualquier parte de la República</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                3ra. Brig. de Inf. "GMMAS"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Tercera Brigada de Infantería "GMAS" conducirá operaciones militares, enmarcadas en las áreas de misión. Fronteras nacionales y defensa contra amenazas transnacionales Protección de infraestructura crítica y contribución al desarrollo nacional. Cooperación dentro del ámbito de gestión de riesgos y defensa civil, del sistema nacional de atención a desastres naturales. Acciones proactivas en apoyo a la política exterior del Estado de Guatemala a partir de la fecha y hasta nueva orden, en el área de responsabilidad operacional para coadyuvar a mantener la soberanía, la independencia, el honor de Guatemala, la integridad del territorio, la paz y la seguridad interior y exterior; con el propósito de crear condiciones que coadyuven a la construcción de condiciones de gobernabilidad que permitan el desarrollo integral del ciudadano, así como alcanzar los objetivos nacionales estratégicos permanentes y actuales.
                                                        Asimismo, estará en condiciones de apoyar a otras brigadas o fuerzas de seguridad a orden del EMDN.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                4ta. Brig. de Inf. "GJRB"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La cuarta brigada de infantería realizará operaciones bélicas y no bélicas a partir del día "D" a la hora "H" para contribuir a crear las condiciones de seguridad que faciliten el desarrollo y progreso de la región con la finalidad de mantener la independencia, la soberanía y la integridad del territorio, la paz y el honor de Guatemala.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEigth" aria-expanded="false" aria-controls="flush-collapseFive">
                                                5ta. Brig. de Inf. "MGS"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Quinta Brigada de Infantería conducirá operaciones militares y de apoyo interinstitucional en el Área de Responsabilidad Operacional, a partir del día "D" a la hora "H", para garantizar los intereses nacionales, dentro de la estrategia de seguridad regional y convenios bilaterales; mediante la cooperación, asistencia recíproca y la disposición de capacidades militares que materialicen el compromiso del Estado de Guatemala, capaces de neutralizar las amenazas, que de forma unilateral u organizada pueda concretar el oponente, con el propósito de integrar la estrategia operacional del Ejército de Guatemala a las instituciones responsables de la seguridad pública, para coadyuvar en la construcción de las condiciones de gobernabilidad que permitan el desarrollo integral del ciudadano, así como alcanzar los objetivos nacionales permanentes y actuales.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                6ta. Brig. de Inf. "CAJI"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Sexta Brigada de Infantería "Coronel Antonio José de Irisarri", conducirá operaciones bélicas, no bélicas, de cooperación integral y de ayuda humanitaria, a partir del día "D" y hora "H", en su Área de Responsabilidad Operacional; para mantener la independencia, soberanía, el honor de Guatemala, la integridad del territorio, la paz y seguridad interior, exterior y colectiva en la región y apoyar en situaciones de emergencia y calamidad pública; con el propósito de contribuir a mantener el ambiente de seguridad que coadyuve al desarrollo integral de la población.</p>
                                                </code>
                                            </div>
                                        </div>
                                        <div class="accordion-item rounded">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEigth" aria-expanded="false" aria-controls="flush-collapseEigth">
                                                    7ma. Brig. de Inf. "GKELG"
                                                </button>
                                            </h2>
                                            <div id="flush-collapseEigth" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <code>
                                                        <p class="text-justify text-dark">eneral Kjell Eugenio Laugerud García” conducirá operaciones bélicas y no bélicas, operaciones interinstitucionales, de seguridad y control en los departamentos de Baja Verapaz y el Progreso así como en los municipios de la cuenca del Polochic de Alta Verapaz, a partir del día “D” a la hora “H” con la finalidad de coadyuvar al desarrollo de los guatemaltecos, contrarrestando las amenazas multidimensionales y apoyar a las instituciones para brindar respuesta inmediata y eficiente ante</p>
                                                    </code>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- SEGUNDO CARROUSEL ACORDEON -->
                                <div class="carousel-item">
                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                                Brigada Militar "MZ"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Conducir operaciones bélicas y no bélicas el día "D" a la hora "H", con el propósito de contribuir a mantener la independencia, la soberanía, la integridad del territorio, la paz y seguridad interior y exterior en su área de responsabilidad operacional; y a orden del EMDN en cualquier parte de la República de Guatemala.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                                BEOS "TCVAQA"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Brigada Especial de Operaciones de Selva, conducirá operaciones militares defensivas, de cooperación integral y asistencia humanitaria al oeste del departamento de Petén y a nivel nacional para controlar las rutas terrestres y fluviales, contrarrestar las amenazas transnacional que afecte la seguridad interna, externa y cooperativa; apoyando en la conservación del humedal más grande de Mesoamérica, la Biósfera Maya y contribuir en la creación de un ambiente seguro, que coadyuve al progreso general de la población y a orden del Estado Mayor de la Defensa Nacional para continuar operaciones en el territorio nacional.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                                BP "FC"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Brigada de Paracaidistas “General Felipe Cruz” bajo control operacional del Estado Mayor de la Defensa Nacional, a partir del día D a la hora “H”, efectuará operaciones militares y de cooperación integral en apoyo interinstitucional en cualquier parte de la República y Área de Influencia; para coadyuvar a la defensa, soberanía e integridad del territorio nacional, con el propósito de garantizar la seguridad interior y exterior, así como participar en operaciones de paz en el marco de la Organización de las Naciones Unidas (ONU), en apoyo a la política exterior del Estado de Guatemala.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                                SBPM"GDHAGM"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">La Segunda Brigada de Policía Militar, a orden del EMDN, mantiene la disciplina ley y orden en las unidades del Ejército de Guatemala. Y conduce operaciones bélicas y de cooperación integral de manera temporal en todo el territorio nacional, en apoyo a las fuerzas de seguridad civil, para restablecer y mantener el orden público, con el propósito de generar un ambiente adecuado para el desarrollo y seguridad de la población.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseFSeven">
                                                BFE "GBPNH"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Efectuar operaciones especiales de corta duración, orientadas a la consecución de objetivos tácticos de valor estratégico; participar en operaciones de paz, en el marco de la ONU; a orden desarrollar operaciones de apoyo a las fuerzas de seguridad civil en el ámbito de la seguridad pública, en todo el territorio nacional; asimismo, adiestrar a unidades militares especiales y contribuir en el entrenamiento de unidades regulares.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFFive">
                                                RM
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Las comandancias de Reservas Militares de la República, organizarán, adiestrarán y movilizarán a las reservas: disponible, movilizable y territorial en todo o parte del territorio nacional, a partir del día "D" y a la hora "H", con el fin de apoyar a la fuerza permanente en operaciones militares, ayuda humanitaria o en situaciones de desastre o calamidad pública y a orden efectuará la desmovilización.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEigth" aria-expanded="false" aria-controls="flush-collapseEigth">
                                                CIT
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="flush-collapseEigth" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body bg-white">
                                            <code>
                                                <p class="text-justify text-dark">La Misión del Comando de Informática y Tecnología, es la de planificar, diseñar, instalar y administrar los sistemas electrónicos de información y Ciberdefensa del Estado de Guatemala, que faciliten la toma de decisiones en el ejercicio del mando a todo nivel y optimizar la administración de los recursos humanos y materiales, desarrollando una plataforma tecnológica acorde al dispositivo, composición y fuerza del Ejército de Guatemala, según lo establecido en el Acuerdo Gubernativo No. 065-2019 de fecha 10MAY2019</p>
                                            </code>
                                        </div>
                                    </div>
                                </div>

                                <!-- TERCER CARROUSER ACORDEON -->
                                <div class="carousel-item">
                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEigth" aria-expanded="false" aria-controls="flush-collapseEigth">
                                                BOM "GJMRB"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEigth" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Efectuar operaciones especiales de corta duración, orientadas a la consecución de objetivos tácticos de valor estratégico; participar en operaciones de paz, en el marco de la ONU; a orden desarrollar operaciones de apoyo a las fuerzas de seguridad civil en el ámbito de la seguridad pública, en todo el territorio nacional; asimismo, adiestrar a unidades militares especiales y contribuir en el entrenamiento de unidades regulares.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                                CCE
                                            </button>
                                        </h2>
                                        <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Planificar, diseñar, instalar, operar y mantener los medios y sistemas de comunicaciones, que faciliten la toma de decisiones en el ejercicio del mando a todo nivel y optimizar la administración de los recursos humanos y materiales, desarrollando una plataforma tecnológica acorde al dispositivo, composición y fuerza del Ejército de Guatemala.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                                CIEG "TCIFVA"
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Proporcionar apoyo de combate, de servicio de combate y de servicio técnico a las unidades del Ejército, apoyar a la población en caso de desastres o calamidad pública, cooperar en actividades del gobierno en pro del desarrollo nacional y conservación del entorno ecológico.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                                CTE
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">El Cuerpo de Transporte del Ejército de Guatemala, apoyará a las brigadas, comandos, servicios y dependencias militares del Ejército de Guatemala, proveyendo movilidad terrestre en las operaciones administrativos y tácticas a orden del Estado Mayor de la Defensa Nacional, en toda la República; para la distribución y depósito de abastecimiento clase III y VII, de vehículos versión civil, así como administrar la reserva operacional, estratégica y de entrenamiento Clase III a orden del Estado Mayor de la Defensa Nacional.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                                GP
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Proporcionar seguridad al Señor Presidente Constitucional de la República y Comandante General del Ejército, Señor Vicepresidente y sus familias, con el fin de preservar su integridad física y mantener la institucionalidad del país.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                CAL
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">Consiste en integrar el conjunto de necesidades operacionales del Ejército de Guatemala a partir del Diseño de Fuerza por medio de los paquetes logísticos para alinearlos posteriormente con las posibilidades presupuestarías del Ministerio de la Defensa y así poder proporcionar sostenimiento operacional táctico a todos los centros de costo dentro de la Ejercito de Guatemala.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item rounded">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed bg-dark bg-gradient text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                CREOMPAZ
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <code>
                                                    <p class="text-justify text-dark">El Comando Regional de Entrenamiento de Operaciones de Mantenimiento de Paz, basado en la doctrina de Naciones Unidas, planificará e impartirá instrucción y capacitación a unidades militares, personal militar y civil, nacional y extranjero; diseminará la doctrina en operaciones de coordinación civil militar y asistencia humanitaria, con la finalidad de prepararlos para participar en operaciones de mantenimiento de paz a nivel mundial.</p>
                                                </code>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- BOTONES ACORDEON-->
                    <div class="row">
                        <div class="col">
                            <button class="carousel-control-prev mr-1px" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next ml-1px" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TERCER ROW -->
        <div class="col-6 p-3 bg-success bg-gradient rounded">
            <div class="col p-5 rounded bg-dark bg-gradient mt-5">
                <div class="container bg transparent rounded table-responsive text-center mt-5">
                    <div class="row mx-auto p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-person-circle text-light " viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                    </div>
                    <h1>
                        <p class="text-center text-light">Tabla de Información Personal</p>
                    </h1>
                    <?php

                    // DATOS TABLA DE INFORMACIÓN
                    if (count($_POST) > 0) {
                        $nombre1 = $_POST['nombre1'];
                        $nombre2 = $_POST['nombre2'];
                        $apellido1 = $_POST['apellido1'];
                        $apellido2 = $_POST['apellido2'];
                        $catalogo = $_POST['catalogo'];
                        $email = $_POST['email'];
                        $edad = $_POST['edad'];
                        $genero = $_POST['genero'];
                        $grado = $_POST['grado'];
                        $arma = $_POST['arma'];
                        $comando = $_POST['depe'];

                        if (isset($_POST['curso1'])) {
                            $curso1 = $_POST['curso1'];
                        } else {
                            $curso1 = null;
                        }

                        if (isset($_POST['curso2'])) {
                            $curso2 = $_POST['curso2'];
                        } else {
                            $curso2 = null;
                        }

                        if (isset($_POST['curso3'])) {
                            $curso3 = $_POST['curso3'];
                        } else {
                            $curso3 = null;
                        }

                    ?>

                        <!-- TABLA DE INFORMACIÓN -->
                        <table name="form1" id="tabla1" class="table table-striped-columns rounded border-primary">
                            <thead>
                                <tr>
                                    <th class="border-2 border-primary"><b>Nombres:</b></th>
                                    <th class="border-2 border-primary"><b>Apellidos:</b></th>
                                    <th class="border-2 border-primary"><b>Catálogo:</b></th>
                                    <th class="border-2 border-primary"><b>Correo:</b></th>
                                    <th class="border-2 border-primary"><b>Edad:</b></th>
                                    <th class="border-2 border-primary"><b>Genero:</b></th>
                                    <th class="border-2 border-primary"><b>Arma:</b></th>
                                    <th class="border-2 border-primary"><b>Comando:</b></th>
                                    <th class="border-2 border-primary"><b>Cursos:</b></th>
                                </tr>
                            <tbody>
                                <tr>
                                    <td class="border-2 border-primary"><?php echo '', $nombre1, ' ', $nombre2, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $apellido1, ' ', $apellido2, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $catalogo, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $email, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $edad, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $genero, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $arma, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo '', $comando, ''; ?></td>
                                    <td class="border-2 border-primary"><?php echo $curso1 . "<br>";
                                                                        echo $curso2 . "<br>";
                                                                        echo $curso3 . "<br>"; ?></td>
                            </tbody>
                            </thead>
                        </table>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>


        <!-- CUARTO ROW -->
        <div class="col-6 p-4 bg-primary bg-gradient rounded">
            <div class="container p-3 bg-dark bg-gradient rounded">

                <!-- PRIMERA LINEA DE IMAGENES -->
                <div class="row ml-3 mt-4">
                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/1era.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/2BI.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/3brigada.png" width="50px" height="50px"> <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/4BI.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>

                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/5BI.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>

                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/6BI-COLOR.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>
                </div>

                <!-- SEGUNDA LINEA DE IMAGENES -->
                <div class="row ml-3 mt-4">
                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/7a Brigada-01.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/beom.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/BEOS.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/BFE.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/BMMZ-C.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/bpgfc.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>
                </div>

                <!-- TERCERA LINEA DE IMAGENES -->
                <div class="row ml-3 mt-4">
                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/BPMGH.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/2BPM.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/CCEG.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/CIEG-COLOR.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/gp.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/Divisa.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>
                </div>

                <!-- CUARTA LINEA DE IMAGENES -->
                <div class="row ml-3 mt-4">
                    <div class="col-3">
                    </div>

                    <div class="col-2">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/rrmm.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col-2">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/transportes.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col-2">
                        <button type="button" class="btn btn-outline-light w-80 h-50 mb-3"><img src="./images/CAL.png" width="50px" height="50px"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 25 25">
                            </svg></button>
                    </div>

                    <div class="col-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>