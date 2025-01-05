  @extends('layout.master')
  @section('title', 'Detail Product')
  @section('content')
    <h1 class=" mt-32 text-5xl	 text-center font-bold">PEMBAYARAN TICKET
    </h1>
    <div class="max-w-4xl mb-20 mt-5 mx-auto p-5 bg-gray-200/70 rounded-lg shadow-lg">
        <div class="flex items-center py-7 gap-7">
            <!-- Gambar -->
            <div class="flex-2">
                <img src="{{ asset('images/match-placeholder.png') }}" alt="Match Image"
                    class="w-full max-w-lg rounded-lg">
            </div>
            <!-- Detail -->
            <div class="flex-3">
                <h2 class="text-xl font-bold mb-4">IND V JPN</h2>
                <div class="flex items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5">
                        <title>stadium-variant</title>
                        <path
                            d="M5,3H7L10,5L7,7V8.33C8.47,8.12 10.18,8 12,8C13.82,8 15.53,8.12 17,8.33V3H19L22,5L19,7V8.71C20.85,9.17 22,9.8 22,10.5C22,11.88 17.5,13 12,13C6.5,13 2,11.88 2,10.5C2,9.8 3.15,9.17 5,8.71V3M12,9.5C8.69,9.5 7,9.67 7,10.5C7,11.33 8.69,11.5 12,11.5C15.31,11.5 17,11.33 17,10.5C17,9.67 15.31,9.5 12,9.5M12,14.75C15.81,14.75 19.2,14.08 21.4,13.05L20,21H15V19A2,2 0 0,0 13,17H11A2,2 0 0,0 9,19V21H4L2.6,13.05C4.8,14.08 8.19,14.75 12,14.75Z" />
                    </svg>
                    <p class="pl-4">stadium</p>
                </div>
                <div class="flex items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5">
                        <title>calendar-clock</title>
                        <path
                            d="M15,13H16.5V15.82L18.94,17.23L18.19,18.53L15,16.69V13M19,8H5V19H9.67C9.24,18.09 9,17.07 9,16A7,7 0 0,1 16,9C17.07,9 18.09,9.24 19,9.67V8M5,21C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H6V1H8V3H16V1H18V3H19A2,2 0 0,1 21,5V11.1C22.24,12.36 23,14.09 23,16A7,7 0 0,1 16,23C14.09,23 12.36,22.24 11.1,21H5M16,11.15A4.85,4.85 0 0,0 11.15,16C11.15,18.68 13.32,20.85 16,20.85A4.85,4.85 0 0,0 20.85,16C20.85,13.32 18.68,11.15 16,11.15Z" />
                    </svg>
                    <p class="pl-4">time</p>
                </div>
                <div class="flex items-center mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 ">
                        <title>television-classic</title>
                        <path
                            d="M8.16,3L6.75,4.41L9.34,7H4C2.89,7 2,7.89 2,9V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V9C22,7.89 21.11,7 20,7H14.66L17.25,4.41L15.84,3L12,6.84L8.16,3M4,9H17V19H4V9M19.5,9A1,1 0 0,1 20.5,10A1,1 0 0,1 19.5,11A1,1 0 0,1 18.5,10A1,1 0 0,1 19.5,9M19.5,12A1,1 0 0,1 20.5,13A1,1 0 0,1 19.5,14A1,1 0 0,1 18.5,13A1,1 0 0,1 19.5,12Z" />
                    </svg>
                    <p class="pl-4">LOK</p>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto bg-white p-6 border-t border-b border-gray-300 rounded-lg">
            <h3 class="text-lg font-semibold mb-8">Detail Transaksi</h3>
            <div class="flex justify-between mx-10 mb-6">
                <span>1 TIKET</span>
            </div>
            <div class="flex justify-between mx-10 mb-6">
                <span>KURSI REGULER</span>
                <span>Rp 10000</span>
            </div>
            <div class="flex justify-between mx-10 mb-6">
                <span>BIAYA LAYANAN</span>
                <span>Rp0</span>
            </div>
        </div>
        <div class="p-6">
            <h3 class="text-lg font-semibold mb-4">Metode Pembayaran</h3>
            
        </div>
    </div>
@endsection

