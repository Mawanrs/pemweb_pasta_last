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
            <input class="form-control datetime {{ $errors->has('start_book') ? 'is-invalid' : '' }}" type="datetime-local" name="start_book" id="start_book" value="{{ old('start_book') }}" required>
        </div>
        <div class="form-group">
            <label class="required" for="finish_book">Finish Book</label>
            <input class="form-control datetime {{ $errors->has('finish_book') ? 'is-invalid' : '' }}" type="datetime-local" name="finish_book" id="finish_book" value="{{ old('finish_book') }}" required>
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
        var startDateInput = document.getElementById('start_book');
        var endDateInput = document.getElementById('finish_book');

        startDateInput.addEventListener('change', function() {
            // Set minimum finish date as 2 hours after start date
            var startDateTime = new Date(startDateInput.value);
            var finishDateTime = new Date(startDateTime.getTime() + 2 * 60 * 60 * 1000);
            endDateInput.value = finishDateTime.toISOString().slice(0, -8); // Format to 'YYYY-MM-DDTHH:MM'
        });
    });
</script>

@endsection
