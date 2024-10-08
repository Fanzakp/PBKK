<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Confirmation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Thank you for your order!</h3>
                    <p>Your order number is: <strong>{{ $order->id }}</strong></p>
                    <p>Total amount: <strong>Rp{{ number_format($order->total_amount, 0, ',', '.') }}</strong></p>
                    <p>Status: <strong>{{ ucfirst($order->status) }}</strong></p>
                    <p class="mt-4">We will process your order soon. You can check your order status in your account.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>