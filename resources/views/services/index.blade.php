
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | Apfiani Group</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <main class="mx-auto max-w-7xl px-6 py-16">
        <header class="mb-12 text-center">
            <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-gray-500">
                Apfiani Group
            </p>
            <h1 class="text-4xl font-bold">Our Services</h1>
            <p class="mx-auto mt-4 max-w-2xl text-gray-600">
                Integrated solutions for businesses and individuals.
            </p>
        </header>

        <section class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($services as $service)
                <article class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                    <h2 class="text-xl font-semibold">
                        {{ app()->getLocale() === 'id'
                            ? $service->name_id
                            : $service->name_en }}
                    </h2>

                    <p class="mt-3 text-gray-600">
                        {{ app()->getLocale() === 'id'
                            ? $service->description_id
                            : $service->description_en }}
                    </p>

                    <button
                        type="button"
                        class="mt-5 font-semibold text-gray-900 underline"
                        onclick="document.getElementById('service-{{ $service->id }}').showModal()"
                    >
                        Learn more
                    </button>

                    <dialog
                        id="service-{{ $service->id }}"
                        class="w-11/12 max-w-xl rounded-xl p-8 shadow-xl"
                    >
                        <h3 class="text-2xl font-bold">
                            {{ app()->getLocale() === 'id'
                                ? $service->name_id
                                : $service->name_en }}
                        </h3>

                        <p class="mt-4 whitespace-pre-line text-gray-600">
                            {{ app()->getLocale() === 'id'
                                ? $service->details_id
                                : $service->details_en }}
                        </p>

                        <form method="dialog" class="mt-6 text-right">
                            <button class="rounded-lg bg-gray-900 px-5 py-2 text-white">
                                Close
                            </button>
                        </form>
                    </dialog>
                </article>
            @empty
                <p class="col-span-full text-center text-gray-500">
                    No services have been published yet.
                </p>
            @endforelse
        </section>
    </main>
</body>
</html>
