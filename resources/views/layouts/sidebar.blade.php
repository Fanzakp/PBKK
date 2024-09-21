<aside class="fixed left-0 top-16 w-64 h-full bg-primary text-secondary overflow-y-auto">
    <nav class="mt-5 px-2">
        <a href="{{ route('dashboard') }}" class="group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('dashboard') ? 'bg-secondary text-primary' : 'text-secondary hover:bg-accent hover:text-primary' }}">
            <svg class="mr-4 h-6 w-6 {{ request()->routeIs('dashboard') ? 'text-primary' : 'text-secondary group-hover:text-primary' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        <a href="{{ route('products.index') }}" class="mt-1 group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('products.*') ? 'bg-secondary text-primary' : 'text-secondary hover:bg-accent hover:text-primary' }}">
            <svg class="mr-4 h-6 w-6 {{ request()->routeIs('products.*') ? 'text-primary' : 'text-secondary group-hover:text-primary' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
            Products
        </a>

        <a href="{{ route('orders.index') }}" class="mt-1 group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('orders.*') ? 'bg-secondary text-primary' : 'text-secondary hover:bg-accent hover:text-primary' }}">
            <svg class="mr-4 h-6 w-6 {{ request()->routeIs('orders.*') ? 'text-primary' : 'text-secondary group-hover:text-primary' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            Orders
        </a>

        <a href="{{ route('customers.index') }}" class="mt-1 group flex items-center px-2 py-2 text-base font-medium rounded-md {{ request()->routeIs('customers.*') ? 'bg-secondary text-primary' : 'text-secondary hover:bg-accent hover:text-primary' }}">
            <svg class="mr-4 h-6 w-6 {{ request()->routeIs('customers.*') ? 'text-primary' : 'text-secondary group-hover:text-primary' }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Customers
        </a>
    </nav>
</aside>