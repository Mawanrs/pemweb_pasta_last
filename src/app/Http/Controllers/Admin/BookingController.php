<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBookingRequest;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use App\Models\Room;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['showForm', 'bookRoom']);
    }
    
    public function index()
    {
        abort_if(Gate::denies('booking_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bookings = Booking::all();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        abort_if(Gate::denies('booking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bookings.create');
    }

    public function store(StoreBookingRequest $request)
    {
        Booking::create($request->all());

        return redirect()->route('admin.bookings.index');
    }

    public function edit(Booking $booking)
    {
        abort_if(Gate::denies('booking_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bookings.edit', compact('booking'));
    }

    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());

        return redirect()->route('admin.bookings.index');
    }

    public function show(Booking $booking)
    {
        abort_if(Gate::denies('booking_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bookings.show', compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        abort_if(Gate::denies('booking_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $booking->delete();

        return back();
    }

    public function massDestroy(MassDestroyBookingRequest $request)
    {
        $bookings = Booking::whereIn('id', request('ids'))->get();

        foreach ($bookings as $booking) {
            $booking->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function showForm()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu untuk melakukan reservasi.');
        }

        return view('layouts.booking-form');
    }

    public function postBooking(Request $request)
{
    $startDateTime = $request->input('startDateTime');
    $finishDateTime = $request->input('finishDateTime');

    // Pengecekan apakah slot sudah terisi
    $existingBooking = Booking::where('startDateTime', $startDateTime)
                              ->where('finishDateTime', $finishDateTime)
                              ->first();

    if ($existingBooking) {
        return response()->json([
            'success' => false,
            'message' => 'Slot already booked'
        ]);
    }

    // Simpan booking jika slot tersedia
    $booking = new Booking();
    $booking->nama_pemesan = $request->input('nama_pemesan');
    $booking->jenis_tamu = $request->input('jenis_tamu');
    $booking->jumlah_tamu = $request->input('jumlah_tamu');
    $booking->category = $request->input('category');
    $booking->startDateTime = $startDateTime;
    $booking->finishDateTime = $finishDateTime;
    $booking->status = $request->input('status');
    $booking->save();

    return response()->json([
        'success' => true,
        'message' => 'Booking successfully created'
    ]);
}


    public function bookRoom(Request $request)
    {
        $validated = $request->validate([
            'datePicked' => 'required|date',
            'startTime' => 'required|date_format:H:i',
            'endTime' => 'required|date_format:H:i|after:startTime',
            'capacity' => 'required|integer|min:2|max:25',
        ]);
    }

    public function checkAvailability(Request $request)
{
    $startDateTime = $request->input('startDateTime');
    $finishDateTime = $request->input('finishDateTime');

    // Cari pemesanan yang bentrok dengan waktu yang diinput
    $conflictingBookings = Booking::where(function ($query) use ($startDateTime, $finishDateTime) {
        $query->whereBetween('start_date_time', [$startDateTime, $finishDateTime])
              ->orWhereBetween('finish_date_time', [$startDateTime, $finishDateTime])
              ->orWhere(function ($query) use ($startDateTime, $finishDateTime) {
                  $query->where('start_date_time', '<=', $startDateTime)
                        ->where('finish_date_time', '>=', $finishDateTime);
              });
    })->count();

    if ($conflictingBookings > 0) {
        return response()->json(['success' => false, 'message' => 'Slot already booked']);
    }
     // Create the booking
     $booking = new Booking();
     $booking->nama_pemesan = $request->input('nama_pemesan');
     $booking->jumlah_tamu = $request->input('jumlah_tamu');
     $booking->category = $request->input('category');
     $booking->start_date_time = $startDateTime;
     $booking->finish_date_time = $finishDateTime;
     $booking->status = $request->input('status');
     $booking->save();
 
     return response()->json(['success' => true, 'message' => 'Booking successfully created']);
 }

}
