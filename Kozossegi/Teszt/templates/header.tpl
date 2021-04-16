<!doctype html >
<HTML lang="hu">
<HEAD>
<TITLE>Teszt Feladat</TITLE>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="app.js" defer></script>

    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

    <!-- Load Vue followed by BootstrapVue -->
    <script src="https://unpkg.com/vue@2.6.12/dist/vue.min.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@2.21.2/dist/bootstrap-vue.min.js"></script>
    <script  src = "https://unpkg.com/bootstrap-vue@2.21.2/dist/bootstrap-vue-icons.min.js" > </script>
</HEAD>
<BODY>
    <div id="app">
        <div class="header">
            <!-- Image and text -->
            <b-navbar variant="faded" type="dark">
                <b-navbar-brand href="index.php">
                    <img src="https://placekitten.com/g/30/30" class="d-inline-block align-top" alt="Kitten">
                    fsociety
                </b-navbar-brand>
            </b-navbar>
        </div>

        <nav class="navbar border border-4 navbar-expand-lg">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mr-4 border border-4 p-2">
                        <a href="Uzenofal.php" ><b-icon icon="house-fill" aria-hidden="true" class="mr-2"></b-icon>Kezdolap</a>
                    </li>
                    <li class="nav-item mr-4 border border-4 p-2">
                        <a href="profil.php"><b-icon icon="person-fill" aria-hidden="true" class="mr-2"></b-icon>Profil</a>
                    </li>
                    <li class="nav-item mr-4 border border-4 p-2">
                        <a href="#"><b-icon icon="chat-square-dots-fill" aria-hidden="true" class="mr-2"></b-icon>Uzenetek</a>
                    </li>
                    <li class="nav-item mr-4 border border-4 p-2">
                        <a href="#"><b-icon icon="people-fill" aria-hidden="true" class="mr-2"></b-icon>Csoportok</a>
                    </li>
                    <li class="nav-item mr-4 border border-4 p-2">
                        <a href="#"><b-icon icon="bell-fill" aria-hidden="true" class="mr-2"></b-icon>Ertesitesek</a>
                    </li>
                </ul>
            </div>

        </nav>

    </div>



