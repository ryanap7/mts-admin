<x-layout.default>

    <div>
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-1 gap-6">
            <div class="panel lg:row-span-1">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Contacts</h5>
                </div>
                <form method="POST" action="{{ route('contacts.update') }}">
                    @csrf
                    @method('PATCH')
                    <div class="w-1/2 p-4 items-start">
                        <div class="mb-5">
                            <label for="phone">No. Telepon</label>
                            <input id="phone" name="phone" type="text" value="{{ old('contacts.phone', $contact->phone) }}" class="form-input" required />
                        </div>
                        <div class="mb-5">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="text" value="{{ old('contacts.email', $contact->email) }}" class="form-input" required />
                        </div>
                        <div class="mb-5">
                            <label for="address">Alamat</label>
                            <input id="address" name="address" type="text" value="{{ old('contacts.address', $contact->address) }}" class="form-input" required />
                        </div>
                        <div class="mb-5">
                            <label for="google_map_link">Link Google Maps</label>
                            <input id="google_map_link" name="google_map_link" type="text" value="{{ old('contacts.google_map_link', $contact->google_map_link) }}" class="form-input" required />
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