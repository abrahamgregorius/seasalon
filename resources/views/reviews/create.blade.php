@extends('app.layout')
@section('content')
    <div class="flex w-full items-center justify-center p-8">
        <div class="rounded-lg border py-4 px-2 bg-card text-card-foreground shadow-lg w-full max-w-md" data-v0-t="card">
            <div class="flex flex-col pt-6 items-center text-center">
                <h3 class="text-3xl font-bold">Leave a Review</h3>
                <p class="text-slate-600 w-[75%]">Express your thoughts about SEASalon</p>
                @session('success')
                    <p class="mt-2 px-3 rounded bg-green-600 text-white text-center text-lg">{{ session('success') }}</p>
                @endsession
                @session('status')
                    <p class="mt-2 px-3 rounded bg-red-600 text-white text-center text-lg">{{ session('status') }}</p>
                @endsession
            </div>
            <div class="px-4 py-2">
                <form action="" method="POST" class="w-full space-y-4">
                    @csrf
                    <div class="space-y-2">
                        <label
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                            for="name">
                            Name
                        </label>
                        <input
                            class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                            name="name" id="name" placeholder="Enter your name" required="true"
                            type="name" />
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="rating">
                                Rating (1-5)
                            </label>
                        </div>
                        <input
                            class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                            name="rating" id="rating" required="true" min="1" max="5"  type="number" />
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                                for="comment">
                                Comment
                            </label>
                        </div>
                        <input
                            class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                            name="comment" id="comment" placeholder="Thoughts on SEASalon..." required="true" type="text" />
                    </div>
                    <div class="buttons flex flex-col items-center gap-3">
                        <button type="submit"
                            class="w-full px-4 py-2 text-white bg-slate-950 hover:bg-slate-800 transition rounded-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
