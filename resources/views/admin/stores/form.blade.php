
<form action="{{route('admin.store.store')}}" method="post">
@csrf
    <div>
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
</div>

<div>
    <label for="description">Descrição</label>
    <input type="text" name="description" id="description">
</div>

<div>
    <label for="phone">Telefone Fixo</label>
    <input type="text" name="phone" id="phone">
</div>

<div>
    <label for="mobile_phone">Celular/Whatsapp</label>
    <input type="text" name="mobile_phone" id="mobile_phone">
</div>

<div>
    @isset($users)
    <select name="user_id" id="user_id">
    @forelse ($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
    @empty

    @endforelse
    </select>
    @endisset

</div>

<div>
    <button type="submit">Salvar</button>

</div>

</form>
