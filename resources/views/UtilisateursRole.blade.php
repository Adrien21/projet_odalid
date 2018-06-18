<select id="roles" name="roles" required>
    @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'superadmin')
        <option value="user" @isset($user->roles) @else {{ 'selected' }}@endisset>Utilisateur</option>
        <option value="admin" @isset($user->roles) @if($user->roles == 'admin') {{ 'selected' }} @endif @endisset>Administrateur</option>
    @endif
    @if (Auth::user()->roles == 'superadmin')
        <option value="superadmin" @isset($user->roles) @if($user->roles == 'superadmin') {{ 'selected' }} @endif @endisset>Super Administrateur</option>
    @endif
</select>
