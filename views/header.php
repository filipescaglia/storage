<div id="menu">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="<?php echo BASE_URL; ?>" class="navbar-brand">Storage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])): ?>
                    <a href="<?php echo BASE_URL; ?>referencias" class="nav-link">Listar</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>referencias/add" class="nav-link">Adicionar</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Perfil</a>
                </li>
                    <?php else: ?>
                    <a href="#" class="nav-link" @click="showLoginModal = true">Login</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])): ?>
                    <a href="<?php echo BASE_URL; ?>user/logout" class="nav-link">Sair</a>
                    <?php else: ?>
                    <a href="#" class="nav-link" @click="showRegisterModal = true">Registrar-se</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Login Modal -->
    <div class="header-modal" id="login-modal" v-if="showLoginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Login
                    </h5>
                    <button type="button" class="close" @click="showLoginModal = false">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email" v-model="userLogin.email" required />
                        </div>
                        <div class="form-group">
                            <label for="passwd">Senha:</label>
                            <input type="password" name="passwd" class="form-control" id="passwd" v-model="userLogin.passwd" required />
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-warning btn-lg mr-2">Limpar</button>
                            <button class="btn btn-success btn-lg" @click="login(); showLoginModal = false">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Login Modal -->

    <!-- Register Modal -->
    <div class="header-modal" id="register-modal" v-if="showRegisterModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Cadastro
                    </h5>
                    <button type="button" class="close" @click="showRegisterModal = false">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="name">Nome Completo:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Pelo menos 3 caracteres" v-model="newUser.name" required />
                        </div>
                        <div class="form-group">
                            <label for="username">Nome de usuário:</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Pelo menos 5 caracteres" v-model="newUser.username" required />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email@dominio.com" v-model="newUser.email" required />
                        </div>
                        <div class="form-group">
                            <label for="passwd">Senha:</label>
                            <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Pelo menos 8 caracteres" v-model="newUser.passwd" required />
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-warning btn-lg mr-2">Limpar</button>
                            <button class="btn btn-success btn-lg" @click="register(); clearInputs(); showRegisterModal = false">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Register Modal -->

</div>