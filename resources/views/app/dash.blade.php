<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SEASalon</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!--
// v0 by Vercel.
// https://v0.dev/t/IpUZ456pXki
-->

    <div class="grid min-h-screen w-full overflow-hidden lg:grid-cols-[280px_1fr]">
        <div class="hidden border-r bg-muted/40 lg:block">
            <div class="flex flex-col gap-2">
                <div class="flex h-[60px] items-center px-6">
                    <a class="flex items-center gap-2 font-semibold" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6">
                            <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                            <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
                            <path d="M12 3v6"></path>
                        </svg>
                        <span class="">Acme Dashboard</span>
                    </a>
                </div>
                <div class="flex-1">
                    <nav class="grid items-start px-4 text-sm font-medium">
                        <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-primary transition-all hover:bg-accent hover:text-accent-foreground"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Dashboard
                        </a>
                        <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <circle cx="8" cy="21" r="1"></circle>
                                <circle cx="19" cy="21" r="1"></circle>
                                <path
                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                                </path>
                            </svg>
                            Orders
                        </a>
                        <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <path d="m7.5 4.27 9 5.15"></path>
                                <path
                                    d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z">
                                </path>
                                <path d="m3.3 7 8.7 5 8.7-5"></path>
                                <path d="M12 22V12"></path>
                            </svg>
                            Products
                        </a>
                        <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            Customers
                        </a>
                        <a class="flex items-center gap-3 rounded-lg px-3 py-2 text-muted-foreground transition-all hover:bg-accent hover:text-accent-foreground"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="h-4 w-4">
                                <path d="M3 3v18h18"></path>
                                <path d="m19 9-5 5-4-4-3 3"></path>
                            </svg>
                            Analytics
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <header class="flex h-14 lg:h-[60px] items-center gap-4 border-b bg-muted/40 px-6">
                <a class="lg:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="h-6 w-6">
                        <path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"></path>
                        <path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"></path>
                        <path d="M12 3v6"></path>
                    </svg>
                    <span class="sr-only">Home</span>
                </a>
                <div class="flex-1">
                    <h1 class="font-semibold text-lg">Dashboard</h1>
                </div>
                <div class="flex flex-1 items-center gap-4 md:ml-auto md:gap-2 lg:gap-4">
                    <form class="ml-auto flex-1 sm:flex-initial">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                            <input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-8 sm:w-[300px] md:w-[200px] lg:w-[300px]"
                                type="search" placeholder="Search..." />
                        </div>
                    </form>
                </div>
            </header>
            <main class="flex flex-1 flex-col gap-4 p-4 md:gap-8 md:p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Total
                                Orders</h3>
                            <p class="text-sm text-muted-foreground">The total number of orders placed on the platform.
                            </p>
                        </div>
                        <div class="p-6">
                            <div class="text-4xl font-bold">1,234</div>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Revenue
                            </h3>
                            <p class="text-sm text-muted-foreground">The total revenue generated from all orders.</p>
                        </div>
                        <div class="p-6">
                            <div class="text-4xl font-bold">$45,678</div>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">New
                                Customers</h3>
                            <p class="text-sm text-muted-foreground">The number of new customers that have signed up.
                            </p>
                        </div>
                        <div class="p-6">
                            <div class="text-4xl font-bold">456</div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Recent
                                Orders</h3>
                            <p class="text-sm text-muted-foreground">A table of the most recent orders placed on the
                                platform.</p>
                        </div>
                        <div class="p-6">
                            <div class="relative w-full overflow-auto">
                                <table class="w-full caption-bottom text-sm">
                                    <thead class="[&amp;_tr]:border-b">
                                        <tr
                                            class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                                Order
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                                Customer
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                                Date
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                                Total
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="[&amp;_tr:last-child]:border-0">
                                        <tr
                                            class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium">
                                                #3210</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Olivia
                                                Martin</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">February 20,
                                                2022</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$42.25</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Shipped</td>
                                        </tr>
                                        <tr
                                            class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium">
                                                #3209</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Ava Johnson
                                            </td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">January 5,
                                                2022</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$74.99</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Paid</td>
                                        </tr>
                                        <tr
                                            class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0 font-medium">
                                                #3204</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Michael
                                                Johnson</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">August 3,
                                                2021</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">$64.75</td>
                                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Unfulfilled
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">
                        <div class="flex flex-col space-y-1.5 p-6">
                            <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight">Top
                                Products</h3>
                            <p class="text-sm text-muted-foreground">A chart showing the top selling products.</p>
                        </div>
                        <div class="p-6">
                            <div class="aspect-[2/1]">
                                <div style="width:100%;height:100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>




    <div class="content">
        @yield('content')
    </div>




</body>

</html>
