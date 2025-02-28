<x-app-layout>
    <x-slot:title>Contact</x-slot:title>

    <!-- Header -->
    <h1 class="text-[4rem] px-10 pt-7">Contact Us</h1>
    <p class="text-lg px-10 pt-2 md:w-5/12 font-light">Reach out to us for inquiries, collaborations, or to discuss your next luxury car acquisition. We’re here to assist and guide you.</p>

    <!-- Contact Form -->
    <form class="md:w-6/12" action="mailto:example@example.com" method="post" enctype="text/plain">
        <div class="md:flex gap-10 px-10 pt-12 w-full">
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input class="py-3 pl-5 pr-16 mt-1 rounded-[20px] border-gray-400 solid border-[1px]" type="text" name="name" id="name" placeholder="Name" @required('name')>
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="py-3 pl-5 pr-16 mt-1 rounded-[20px] border-gray-400 solid border-[1px]" type="email" name="email" id="email" placeholder="Email" @required('name')>
            </div>
        </div>

        <div class="flex gap-10 px-10 md:pt-10">
            <div class="flex flex-col w-full">
                <label for="inquiry">Inquiry Type</label>
                <select class="py-3 pl-5 pr-1 max-w-[90%] mt-1 rounded-[20px] border-gray-400 solid border-[1px] dark:text-black" name="inquiry" id="inquiry">
                    <option value="" selected disabled>Select One</option>
                    <option value="purchase-vehicle">Purchase A Vehicle</option>
                    <option value="sell-car">Sell Us Your Vehicles</option>
                    <option value="partnership-events">Partnerships & Events</option>
                    <option value="careers">Careers</option>
                    <option value="other">Others</option>
                </select>
            </div>
        </div>

        <div class="flex gap-10 px-10 md:pt-12 w-full">
            <div class="flex flex-col">
                <label for="message">Message</label>
                <textarea class="p-5 mt-2 w-[22rem] md:w-[45rem] rounded-[20px] dark:text-black" name="message" id="message" rows="10"></textarea>
            </div>
        </div>

        <x-primary-button class="mx-10 my-5">Submit</x-primary-button>
    </form>

</x-app-layout>
