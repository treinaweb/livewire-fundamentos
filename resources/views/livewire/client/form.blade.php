<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" wire:model="form.name" id="name" name="name" class="form-control" placeholder="Digite seu nome">
    @error('form.name')
        <div class="error">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" wire:model="form.email" id="email" name="email" class="form-control" placeholder="Digite seu email">
    @error('form.email')
        <div class="error">{{ $message }}</div>
    @enderror
</div>

<button 
    type="submit" 
    class="btn btn-primary"
    wire:loading.attr="disabled"
>
    Enviar
</button>

<div wire:loading>
    O registro está sendo salvo
</div>
