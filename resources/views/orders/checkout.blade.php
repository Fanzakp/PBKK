<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Checkout') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('checkout.store') }}">
                        @csrf
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold mb-2">Order Summary</h3>
                            @foreach($cartItems as $id => $details)
                                <div class="flex justify-between mb-2">
                                    <span>{{ $details['name'] }} (x{{ $details['quantity'] }})</span>
                                    <span>Rp{{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</span>
                                </div>
                            @endforeach
                            <div class="font-bold mt-2">
                                <span>Total:</span>
                                <span>Rp{{ number_format($total, 0, ',', '.') }}</span>
                            </div>
                        </div>
                        <input type="hidden" name="total_amount" value="{{ $total }}">
                        <div class="mb-4">
                            <label for="shipping_address" class="block text-sm font-medium text-gray-700">Shipping Address</label>
                            <textarea name="shipping_address" id="shipping_address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="payment_method" class="block text-sm font-medium text-gray-700">Payment Method</label>
                            <select name="payment_method" id="payment_method" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                <option value="credit_card">Credit Card</option>
                                <option value="bank_transfer">Bank Transfer</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Place Order
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>