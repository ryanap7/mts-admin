<x-filament::page>
<x-filament::card class="py-7">

<h5 class="mb-0 font-semibold text-base">Project Completed</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->project_completed->value }}</p>
<h5 class="mb-0 font-semibold text-base">Customers</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->customers->value }}</p>
<h5 class="mb-0 font-semibold text-base">Products Me</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->products_me->value }}</p>
<h5 class="mb-0 font-semibold text-base">Portfolio</h5>
<p class="mt-0" style="margin-top: 2px">{{ $this->portfolio->value }}</p>

</x-filament::card>
</x-filament::page>
