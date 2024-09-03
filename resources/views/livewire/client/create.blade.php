<div>
    <h1>Criar Cliente</h1>

    <form class="form-container" wire:submit="store">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" wire:model="name" id="name" name="name" class="form-control" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" wire:model="email" id="email" name="email" class="form-control" placeholder="Digite seu email">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
