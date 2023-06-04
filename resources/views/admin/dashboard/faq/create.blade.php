<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<style>
    *{
        font-family: Poppins
    }
    .container{
        width: 60%;
        background-color: rgb(235, 233, 233);
        border-radius: 30px;
        padding: 20px 30px 20px 30px;
        margin-top: 40px
    }
    .form-control{
        width: 100%;
        border-radius: 20px
    }
</style>
<div class="container">
<h1>Tambah FAQ</h1>
<div class="">
    <form method="post" action="/admin/dashboard/faq">
        @csrf
        <div class="mb-3">
          <label for="question" class="form-label">Pertanyaan</label>
          <input type="text" class="form-control @error('question') is-invalid
          @enderror" id="question" name="question">
          @error('question')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror
        </div>
        <div class="mb-3">
          <label for="answer" class="form-label">Jawaban</label>
          <input type="textarea" class="form-control @error('answer')
          @enderror" id="answer" name="answer">
          @error('answer')
          <div class="invalid-feedback"></div>
              {{ $message }}
          @enderror
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mr-3">Tambah FAQ</button>
            <a href="/admin/dashboard/faq" class="btn btn-danger active" role="button" aria-pressed="true">Cancel</a>
        </div>
      </form>
</div>
</div>
