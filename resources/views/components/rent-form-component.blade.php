<form class="relative flex flex-col items-end justify-end gap-8 p-4 sm:p-0" action="{{ route('rented.car', $car) }}"
    method="get">
    <a href="{{ route('route.car', $car['id']) }}" class="absolute top-4 right-4 text-yellow-600 font-bold text-2xl">X</a>
    <figure class="m-auto">
        <img src="{{ $car['img'] }}" alt="">
    </figure>
    <div class="flex flex-col gap-8 m-auto max-w-[1000px] w-full">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-12">
            <div class="flex flex-col gap-2 w-full">
                <label for="" class="text-center sm:text-start text-lg font-light">First Name</label>
                <input class="md:placeholder:text-lg border-b-2 border-gray-200 p-3" type="text"
                    placeholder="Enter your first name" required>
            </div>
            <div class="flex flex-col gap-2 w-full">
                <label for="" class="text-center sm:text-start text-lg font-light">Last Name</label>
                <input class="md:placeholder:text-lg border-b-2 border-gray-200 p-3" type="text"
                    placeholder="Enter your last name" required>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-12">
            <div class="flex flex-col gap-2 w-full">
                <label for="" class="text-center sm:text-start text-lg font-light">Phone number</label>
                <input class="md:placeholder:text-lg border-b-2 border-gray-200 p-3" type="tel"
                    placeholder="Enter your phone number" required>
            </div>
            <div class="flex flex-col gap-2 w-full">
                <label for="" class="text-center sm:text-start text-lg font-light">Age</label>
                <input class="md:placeholder:text-lg border-b-2 border-gray-200 p-3" type="number" min="18"
                    placeholder="18" required>
            </div>
        </div>

        <div class="flex flex-col gap-2 w-full">
            <label for="" class="text-center sm:text-start text-lg font-light">Email</label>
            <input class="md:placeholder:text-lg border-b-2 border-gray-200 p-3" type="email"
                placeholder="Enter your email address" required>
        </div>
    </div>
    <button type="submit" class="w-full sm:w-[150px] h-[60px] p-2 bg-yellow-600 text-md font-bold text-white">Rent
        now!</button>
</form>
