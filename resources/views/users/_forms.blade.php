<form class="form" method="POST" action="{{ isset($user) ? route('user.update', $user->id) : route('user.store') }}">
    @csrf
    @if (isset($user))
        @method('PUT')
    @endif

    <div class="card card-register card-white">
        <div class="card-body">
            <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-single-02"></i>
                    </div>
                </div>
                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Name') }}" value="{{ old('name', isset($user) ? $user->name : '') }}">
                @include('alerts.feedback', ['field' => 'name'])
            </div>
            <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                    </div>
                </div>
                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Email') }}" value="{{ old('email', isset($user) ? $user->email : '') }}">
                @include('alerts.feedback', ['field' => 'email'])
            </div>
            <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                    </div>
                </div>
                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ _('Password') }}">
                @include('alerts.feedback', ['field' => 'password'])
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="tim-icons icon-lock-circle"></i>
                    </div>
                </div>
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ _('Confirm Password') }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Escolha o tipo de usuário</label>
                <select class="form-control" id="exampleFormControlSelect1" name='super_user'>
                    <option value="0" {{ isset($user) && $user->super_user == 0 ? 'selected' : '' }}>Comum</option>
                    <option value="1" {{ isset($user) && $user->super_user == 1 ? 'selected' : '' }}>Administrador</option>
                </select>
            </div>
            <div class="form-check text-left {{ $errors->has('password') ? ' has-danger' : '' }}">
                <label class="form-check-label">
                    <input class="form-check-input {{ $errors->has('agree_terms_and_conditions') ? ' is-invalid' : '' }}" name="agree_terms_and_conditions"  type="checkbox"  {{ old('agree_terms_and_conditions') ? 'checked' : '' }}>
                    <span class="form-check-sign"></span>
                    {{ _('I agree to the') }}
                    <a href="#">{{ _('terms and conditions') }}</a>.
                    @include('alerts.feedback', ['field' => 'agree_terms_and_conditions'])
                </label>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-round btn-lg">{{ isset($user) ? _('Atualizar Usuário') : _('Criar Usuário') }}</button>
        </div>
    </div>
</form>