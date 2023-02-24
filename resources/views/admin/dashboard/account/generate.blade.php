<h1>Generate Akun</h1>
<div class="col-lg-8">
    <form method="post" action="/admin/dashboard/account">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email')
            @enderror" id="email" name="email">
            @error('email')
            <div class="invalid-feedback"></div>
                {{ $message }}
            @enderror
          </div>
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name') is-invalid
          @enderror" id="name" name="name">
          @error('name')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username')
          @enderror" id="username" name="username">
          @error('username')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control @error('password')
          @enderror" id="password" name="password">
          @error('password')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label for="role" class="form-label">Role</label>
          <input type="text" class="form-control @error('role')
          @enderror" id="role" name="role">
          @error('role')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
      </form>
</div>
