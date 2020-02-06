<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">PWA App</a>
    
    <?php if(isset($_GET['v']))
    {
        echo '<a href="index.php" class="btn btn-secondary text-right"><i class="fas fa-arrow-alt-circle-left"></i></a>';
    }else{
        echo '<a href="?v=cadastro" class="btn btn-secondary text-right"><i class="fas fa-plus"></i></a>';
    }
    ?>
    
    <!--
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?v=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?v=cadastro">Cadastro</a>
            </li>
        </ul>
    </div>
    -->
</nav>