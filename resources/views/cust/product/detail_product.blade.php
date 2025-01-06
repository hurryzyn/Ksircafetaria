@extends('layout.master')
@section('title', 'Detail Ticket Payment')
@section('content')
  <h1 class="text-5xl  text-center font-bold text-black mt-36">MATCHDAY</h1>
  <div class="max-w-6xl mb-20 mt-10 mx-auto p-8 bg-white rounded-lg shadow-lg" x-data="ticketBooking">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
          <!-- Gambar -->
          <div>
              <img src="{{ asset('images/match-placeholder.png') }}" alt="Match Image" class="w-full rounded-lg shadow-md">
          </div>
          <!-- Detail -->
          <div>
              <h2 class="text-2xl font-bold mb-4">IND V JPN</h2>
              <p class="text-gray-700 mb-4">Stadium: Stadium Name</p>
              <p class="text-gray-700 mb-4">Time: Match Time</p>
              <p class="text-gray-700 mb-4">Location: Match Location</p>
              <div class="mt-6">
                  <div class="flex items-center gap-4">
                      <label for="ticket-count" class="font-semibold">Jumlah Tiket:</label>
                      <input type="number" id="ticket-count" min="1" class="border-gray-300 border rounded-lg p-2 w-20" x-model="ticketCount">
                  </div>
                  <button @click="bookTicket" class="mt-4 px-6 py-3 bg-blue-500 text-white rounded-lg shadow-md hover:bg-blue-600 transition">Pesan Tiket</button>
                  <template x-if="!isLoggedIn">
                      <div class="mt-4 text-red-500 font-semibold">Silakan login terlebih dahulu untuk memesan tiket.</div>
                  </template>
              </div>
          </div>
      </div>
      <div class="mt-10 bg-gray-100 p-8 rounded-lg">
          <h3 class="text-xl font-semibold mb-8">Detail Transaksi</h3>
          <ul class="list-none text-gray-700">
              <li class="flex justify-between mb-4">
                  <span>Jumlah Tiket:</span>
                  <span x-text="ticketCount"></span>
              </li>
              <li class="flex justify-between mb-4">
                  <span>Harga per Tiket:</span>
                  <span>Rp 10,000</span>
              </li>
              <li class="flex justify-between font-bold">
                  <span>Total:</span>
                  <span x-text="'Rp ' + (ticketCount * 10000)"></span>
              </li>
          </ul>
      </div>
  </div>
  <script>
      document.addEventListener('alpine:init', () => {
          Alpine.data('ticketBooking', () => ({
              ticketCount: 1,
              isLoggedIn: false, // Set to true if user is logged in
              bookTicket() {
                  if (!this.isLoggedIn) {
                      alert('Silakan login terlebih dahulu untuk memesan tiket.');
                      return;
                  }
                  // Redirect to payment gateway or process booking further
              },
          }));
      });
  </script>
@endsection
