<?= $this->extend('base_layout') ?>
<?= $this->section('content') ?>
    <div class="d-flex align-items-center justify-content-between mt-5">
        <h2 class="">Clientes</h2>
        <button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#registerCustomer">Cadastrar cliente</button>
    </div>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <th scope="row"><?= esc($customer['id']) ?></th>
                    <td><?= esc($customer['name']) ?></td>
                    <td><?= esc($customer['email']) ?></td>
                    <td><?= esc($customer['phone']) ?></td>
                    <td>
                        <div class="p-2">
                            <i class="fa-regular fa-pen-to-square fa-2xl" style="color: #5f6063;" onclick="editCustomer(<?= esc($customer['id']) ?>)"></i>
                            <form action="/clientes/delete/<?= $customer['id'] ?>" method="post" class="d-inline">
                                <button class="btn" type="submit"><i class="fa-solid fa-trash fa-2xl d-" style="color: #595b5f;"></i></button>
                            </form>

                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <div class="modal fade" id="registerCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/clientes" method="post" id="register-customer">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="recipient-name" class="col-form-label fw-bold">Dados do cliente</label>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Telefone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label fw-bold">Endereço</label>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cep</label>
                                <input type="text" class="form-control" onblur="pesquisacep(this.value);" name="cep">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Rua</label>
                                <input type="text" class="form-control" id="rua" name="street">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="neighborhood">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="city">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">UF</label>
                                <input type="text" class="form-control" id="uf" name="uf">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/clientes/editar" method="post" id="edit-customer">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="recipient-name" class="col-form-label fw-bold">Dados do cliente</label>
                        <div class="mb-3 d-none">
                            <input type="text" class="form-control" name="user-id" id="user-id">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Telefone</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label fw-bold">Endereço</label>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cep</label>
                                <input type="text" class="form-control" onblur="pesquisacep(this.value);" id="cep" name="cep">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Rua</label>
                                <input type="text" class="form-control" id="rua" name="street">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Bairro</label>
                                <input type="text" class="form-control" id="bairro" name="neighborhood">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="city">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">UF</label>
                                <input type="text" class="form-control" id="uf" name="uf">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/via-cep.js') ?>"></script>
    <script src="<?= base_url('js/register-customer.js') ?>"></script>
    <script src="<?= base_url('js/edit-customer.js') ?>"></script>
<?= $this->endSection() ?>