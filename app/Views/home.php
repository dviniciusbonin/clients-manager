<?= $this->extend('base_layout') ?>
    <?= $this->section('content') ?>
        <div class="d-flex align-items-center justify-content-center flex-column mt-5">
        <h1 class="text-center mt-5 pt-5">Login</h1>
            <form class="d-flex flex-column align-items-center w-100">
                <div class="mb-3 w-25">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 w-25">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control p-3" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-outline-secondary btn-lg">Entrar</button>
            </form>
        </div>
    <?= $this->endSection() ?>