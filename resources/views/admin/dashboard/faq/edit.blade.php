
<h1>Ubah FAQ</h1>
<div class="col-lg-8">


    <form method="post" action="/admin/dashboard/faq/{{ $faqs->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="question" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $faqs->question }}">
        </div>
        <div class="mb-3">
            <label for="answer" class="form-label">Jawaban</label>
            <input type="textarea" class="form-control" id="answer" name="answer" value="{{ $faqs->answer }}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah FAQ</button>
    </form>


</div>

