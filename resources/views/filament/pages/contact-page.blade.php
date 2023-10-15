<x-filament::page>
<x-filament::card class="py-7">

<h5 class="mb-0 font-semibold text-base">Phone</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->contact->phone }}</p>
<h5 class="mb-0 font-semibold text-base">Email</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->contact->email }}</p>
<h5 class="mb-0 font-semibold text-base">Address</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->contact->address }}</p>
<h5 class="mb-0 font-semibold text-base">Link Google Map</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->contact->google_map_link }}</p>

</x-filament::card>
</x-filament::page>
