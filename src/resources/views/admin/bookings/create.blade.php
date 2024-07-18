@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Book Now</h1>
    <form action="{{ route('booking.post') }}" method="POST" id="bookingForm">
        @csrf
        <div class="form-group">
            <label for="nama_pemesan">Customer Name</label>
            <input type="text" name="nama_pemesan" id="nama_pemesan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_tempat">Jenis Tempat</label>
            <select name="jenis_tempat" id="jenis_tempat" class="form-control" required>
                <option value="indoor">In-Door</option>
                <option value="outdoor">Out-Door</option>
                <option value="smoking_area">Smoking Area</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_tamu">Jenis Tamu</label>
            <select name="jenis_tamu" id="jenis_tamu" class="form-control" required>
                <option value="Regular">Regular</option>
                <option value="VIP">VIP</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jumlah_tamu">Jumlah Tamu</label>
            <input type="number" name="jumlah_tamu" id="jumlah_tamu" class="form-control" required>
        </div>
        <div class="form-group">
            <label class="required" for="start_book">Start Book</label>
            <input class="form-control datetime {{ $errors->has('start_book') ? 'is-invalid' : '' }}" type="text" name="start_book" id="start_book" value="{{ old('start_book') }}" required>
        </div>
        <div class="form-group">
            <label class="required" for="finish_book">Finish Book</label>
            <input class="form-control datetime {{ $errors->has('finish_book') ? 'is-invalid' : '' }}" type="text" name="finish_book" id="finish_book" value="{{ old('finish_book') }}" required>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category_select" class="form-control" required>
                <option value="Ter-Booking">Ter-Booking</option>
                <option value="Dibatalkan">Dibatalkan</option>
                <option value="Tidak_tersedia">Tidak Tersedia</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var startBookInput = document.getElementById('start_book');
    var finishBookInput = document.getElementById('finish_book');

    startBookInput.addEventListener('change', function() {
        var startDateTime = new Date(startBookInput.value);
        var finishDateTime = new Date(startDateTime.getTime() + (2 * 60 * 60 * 1000)); // Adding 2 hours

        // Format finishDateTime to ISO string format
        var finishISO = finishDateTime.toISOString().slice(0, 16).replace('T', ' ');

        finishBookInput.value = finishISO;
    });

    finishBookInput.addEventListener('change', function() {
        var startDateTime = new Date(startBookInput.value);
        var finishDateTime = new Date(finishBookInput.value);

        // Check if finish book time is at least 2 hours after start book time
        if (finishDateTime < startDateTime.getTime() + (2 * 60 * 60 * 1000)) {
            alert('Finish book time must be at least 2 hours after start book time.');
            finishBookInput.value = ''; // Clear invalid value
        }
    });

    // Initial calculation on page load if start_book has a value
    if (startBookInput.value) {
        var startDateTime = new Date(startBookInput.value);
        var finishDateTime = new Date(startDateTime.getTime() + (2 * 60 * 60 * 1000)); // Adding 2 hours

        var finishISO = finishDateTime.toISOString().slice(0, 16).replace('T', ' ');
        finishBookInput.value = finishISO;
    }
});
</script>

@endsection
