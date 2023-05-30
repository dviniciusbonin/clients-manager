<?= $this->extend('base_layout') ?>
<?= $this->section('content') ?>
<div class="d-flex align-items-center justify-content-between mt-5">
    <h2 class="">Clientes</h2>
    <a href="/clientes/novo"><button type="button" class="btn btn-secondary btn-md">Cadastrar cliente</button></a>
</div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>mark@gmail.com</td>
                <td>40028922</td>
                <td>Rua teste</td>
                <td>
                    <div class="p-2">
                        <i class="fa-regular fa-pen-to-square fa-2xl" style="color: #5f6063;"></i>
                        <i class="fa-solid fa-trash fa-2xl" style="color: #595b5f;"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>mark@gmail.com</td>
                <td>40028922</td>
                <td>Rua teste</td>
                <td>
                    <div class="p-2">
                        <i class="fa-regular fa-pen-to-square fa-2xl" style="color: #5f6063;"></i>
                        <i class="fa-solid fa-trash fa-2xl" style="color: #595b5f;"></i>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
<?= $this->endSection() ?>