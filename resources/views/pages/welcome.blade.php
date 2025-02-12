@extends('layouts.root')

@section('content')
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Inside Design: Stories and interviews</h1>
            <p class="text-secondary mb-8">Subscribe to learn about new product features, the latest in technology, and
                updates.</p>

            <div class="flex max-w-md mx-auto">
                <input type="email" placeholder="Enter your email"
                    class="flex-1 px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-purple-500" />
                <button class="px-6 py-2 bg-black text-white rounded-r-lg hover:bg-gray-800">
                    Subscribe
                </button>
            </div>
        </div>

        <!-- Blog Posts -->
        <div class="space-y-12">
            <h2 class="text-2xl font-semibold mb-8">Recent blog posts</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Blog Post 1 -->
                <article class="group">
                    <div class="relative mb-4 overflow-hidden rounded-lg">
                        <img src="https://unsplash.it/600/400" alt="Blog post"
                            class="w-full h-[300px] object-cover transition duration-300 group-hover:scale-105" />
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-2 text-sm text-secondary">
                            <span>Olivia Rhye</span>
                            <span>•</span>
                            <span>20 Jan 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold group-hover:text-purple-600">
                            Conversations with London Makr & Co.
                        </h3>
                        <p class="text-secondary">We sat down with London's fast-growing brand and product design studio,
                            Makr & Co. to find out how they've used Untitled UI to 2x their revenue.</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 text-sm bg-gray-100 rounded-full">Design</span>
                            <span class="px-3 py-1 text-sm bg-gray-100 rounded-full">Research</span>
                            <span class="px-3 py-1 text-sm bg-gray-100 rounded-full">Interviews</span>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="group">
                    <div class="relative mb-4 overflow-hidden rounded-lg">
                        <img src="https://unsplash.it/601/400" alt="Blog post"
                            class="w-full h-[300px] object-cover transition duration-300 group-hover:scale-105" />
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-2 text-sm text-secondary">
                            <span>Phoenix Baker</span>
                            <span>•</span>
                            <span>19 Jan 2024</span>
                        </div>
                        <h3 class="text-xl font-semibold group-hover:text-purple-600">
                            A Relentless Pursuit of Perfection in Product Design
                        </h3>
                        <p class="text-secondary">I began to notice that there was a sharp contrast between well-made
                            products and those that were simply adequate.</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 text-sm bg-gray-100 rounded-full">Design</span>
                            <span class="px-3 py-1 text-sm bg-gray-100 rounded-full">Research</span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection
