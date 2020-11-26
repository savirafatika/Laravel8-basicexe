<form action="/simpan" method="POST">

   @csrf @method('put')
   <button type="submit">Submit {{ $nama }}</button>

</form>

{{-- <a href="{{ route('dashboard') }}">go to dashboard</a> --}}
<a href="{{ route('master-data.data-karyawan') }}">go to data-karyawan page</a><br>
<a href="{{ route('master-data.data-kerja') }}">go to data-kerja page</a>