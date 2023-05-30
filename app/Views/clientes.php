<?= $this->extend('base_layout') ?>
<?= $this->section('content') ?>
<div class="d-flex align-items-center justify-content-between mt-5">
    <h2 class="">Clientes</h2>
    <button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar cliente</button>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar cliente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nome</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefone</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>