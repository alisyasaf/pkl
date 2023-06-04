<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    *{
        margin-left: 5px
    }
    .container{
        width: 60%;
        background-color: #e4e4e4;
        border-radius: 20px;
        margin-top: 20px;
        padding: 30px 20px 30px 10px
    }
    .form-control{
        border-radius: 75px;
        border-color: #757575;
        border-style: none;
    }
    #role{
        width: 200px;
        border-radius: 30px;
        border-style: none;
        padding: 0 10px 0 10px
    }
    h1{
        margin-bottom: 30px;
    }
</style>
<div class="container">
<h1>Generate Akun</h1>
<div class="">
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
          <select name="role" id="role">
            <option value="1">Admin</option>
            <option value="2">Mitra</option>
          </select>
          {{-- <input type="text" class="form-control @error('role')
          @enderror" id="role" name="role">
          @error('role')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror --}}
        </div>
        <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn btn-primary">Generate</button>
    </div>
      </form>
</div>
</div>
