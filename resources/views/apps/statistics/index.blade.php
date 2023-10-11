<x-layout.default>

    <div x-data="form">
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-1 gap-6">
            <div class="panel lg:row-span-1">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Statistics</h5>
                </div>
                <form method="POST" action="{{ route('statistics.update') }}">
                    @csrf
                    @method('PATCH')
                    <div class="w-1/2 p-4 items-start">
                        <div class="mb-5">
                            <label for="project">Projects Completed</label>
                            <input id="project" name="statistics[PROJECTS COMPLETED]" type="number" value="{{ old('statistics.PROJECTS COMPLETED', $statistics->where('label', 'PROJECTS COMPLETED')->first()->value) }}" class="form-input" required />
                        </div>
                        <div class="mb-5">
                            <label for="customer">Customers</label>
                            <input id="customer" name="statistics[CUSTOMERS]" type="number" value="{{ old('statistics.CUSTOMERS', $statistics->where('label', 'CUSTOMERS')->first()->value) }}" class="form-input" required />
                        </div>
                        <div class="mb-5">
                            <label for="product">Products Me</label>
                            <input id="product" name="statistics[PRODUCTS ME]" type="number" value="{{ old('statistics.PRODUCTS ME', $statistics->where('label', 'PRODUCTS ME')->first()->value) }}" class="form-input" required />
                        </div>
                        <div>
                            <label for="portfolio">Portfolio</label>
                            <input id="portfolio" name="statistics[PORTFOLIO]" type="number" value="{{ old('statistics.PORTFOLIO', $statistics->where('label', 'PORTFOLIO')->first()->value) }}" class="form-input" required />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout.default>

<script>
    showMessage = (type = "success", message) => {
        const toast = window.Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            showCloseButton: true,
            customClass: {
                popup: `color-${type}`
            },
        });
        toast.fire({
            title: message,
        });
    };

    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(form);

            try {
                const response = await fetch(form.getAttribute('action'), {
                    method: form.getAttribute('method'),
                    body: formData,
                });

                if (response.ok) {
                    const data = await response.json();
                    showMessage("success", data.message);
                } else {
                    showMessage("danger", data.message);
                }
            } catch (error) {
                console.error(error);
            }
        });
    });
</script>