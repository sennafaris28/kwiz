@extends('layouts.app')

<title>New Quiz</title>

@section('content')

	<div class="whole-wrap section-gap">
		<div class = "container">
			<form method = "POST">
				<h1>Form Kuis Baru</h1>
				<label>Masukkan kode soal : </label> <input type="text" name="Kode Soal" value="Kode Soal..." required><br>
				<h2>Masukkan pertanyaan : </h2>
				<textarea name="question" id="question" rows="5" type="text" style="width:80%;"  required></textarea>

				<h2>Jawaban : </h2>
				<p>Tekan tombol pada jawaban yang benar</p>
				<label>A.				</label> <input type="text" name="A" style="width:75%;" required> <input type="radio" name="A" value="A"><br>
				<label>B.				</label> <input type="text" name="B" style="width:75%;" required> <input type="radio" name="B" value="B"><br>
				<label>C.				</label> <input type="text" name="C" style="width:75%;" required> <input type="radio" name="C" value="C"><br>
				<label>D.				</label> <input type="text" name="D" style="width:75%;" required> <input type="radio" name="D" value="D"><br>
				<p align="center"><input type="submit" value="Insert"><input type="reset" value="Reset"></p>
			</form>
		</div>
	</div>

@endsection
