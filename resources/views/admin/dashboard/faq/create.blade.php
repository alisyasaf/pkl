<h1>Tambah FAQ</h1>
<div class="col-lg-8">
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
        <button type="submit" class="btn btn-primary">Tambah FAQ</button>
      </form>
</div>
