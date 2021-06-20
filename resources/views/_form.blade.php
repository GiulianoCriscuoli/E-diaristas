@csrf
<div class="mb-3">
    <label for="fullname" class="form-label">Nome Completo</label>
    <input value="{{ @$diarist->fullname }}" type="text" class="form-control" id="fullname" name="fullname"  maxlength="100">
</div>
<div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input value="{{ @$diarist->cpf }}" type="text" class="form-control" id="cpf" name="cpf"  maxlength="14">
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input value="{{ @$diarist->email }}" type="email" class="form-control" id="email" name="email"  maxlength="100">
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Telefone</label>
    <input value="{{ @$diarist->phone }}" type="text" class="form-control" id="phone" name="phone"  maxlength="14">
</div>
<div class="mb-3">
    <label for="address" class="form-label">Endereço</label>
    <input value="{{ @$diarist->address }}" type="text" class="form-control" id="address" name="address"  maxlength="255">
</div>
<div class="mb-3">
    <label for="number" class="form-label">Número</label>
    <input value="{{ @$diarist->number }}" type="text" class="form-control" id="number" name="number"  maxlength="20">
</div>
<div class="mb-3">
    <label for="complement" class="form-label">Complemento</label>
    <input value="{{ @$diarist->complement }}" type="text" class="form-control" id="complement" name="complement" maxlength="50">
</div>
<div class="mb-3">
    <label for="cep" class="form-label">CEP</label>
    <input value="{{ @$diarist->cep }}" type="text" class="form-control" id="cep" name="cep"  maxlength="9">
</div>
<div class="mb-3">
    <label for="district" class="form-label">Bairro</label>
    <input value="{{ @$diarist->district }}" type="text" class="form-control" id="district" name="district"  maxlength="50">
</div>
<div class="mb-3">
    <label for="city" class="form-label">Cidade</label>
    <input value="{{ @$diarist->city }}" type="text" class="form-control" id="city" name="city"  maxlength="50">
</div>
<div class="mb-3">
    <label for="state" class="form-label">Estado</label>
    <input value="{{ @$diarist->state }}" type="text" class="form-control" id="state" name="state"  maxlength="2">
</div>
{{-- <div class="mb-3">
    <label for="code_ibge" class="form-label">Código IBGE</label>
    <input value="{{ @$diarist->code_ibge }}" type="text" class="form-control" id="code_ibge" name="code_ibge" >
</div> --}}
<div class="mb-3">
    <label for="user_photo" class="form-label">Foto</label>
    <input value="{{ @$diarist->user_photo }}" type="file" class="form-control" id="user_photo" name="user_photo" >
</div>

<button type="submit" class="btn btn-primary">Salvar</button>