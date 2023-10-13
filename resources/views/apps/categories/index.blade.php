<x-layout.default>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="/assets/js/simple-datatables.js"></script>

    <div x-data="categories">

        <!-- Modal -->
        <div>
            <div class="fixed inset-0 bg-[black]/60 z-[999] hidden" :class="open && '!block'">
                <div class="flex items-start justify-center min-h-[90vh] px-4" @click.self="open = false">
                    <div x-show="open" x-transition x-transition.duration.300 class="panel border-0 p-0 rounded-lg overflow-hidden  w-full max-w-xl my-8">
                        <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                            <h5 class="font-bold text-lg title">Add Data</h5>
                        </div>
                        <form method="POST" action="{{ route('categories.store') }}">
                            @csrf
                            <div class="p-5">
                                <div class="items-start">
                                    <div>
                                        <input id="id" name="id" type="hidden" />
                                        <label for="brand">Brand</label>
                                        <select name="brand_id" id="brand" class="form-input mb-5">
                                            @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Input here..." class="form-input" required autocomplete="off" />
                                    </div>
                                </div>
                                <div class="flex justify-end items-center mt-8">
                                    <button type="button" class="btn btn-outline-danger" @click="toggle">Close</button>
                                    <button type="buttton" class="btn btn-primary ltr:ml-4 rtl:mr-4" @click="saveData">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel" id="content-panel">
            <div class="flex">
                <h5 class="md:mb-0 mb-5  mr-7 font-semibold text-lg dark:text-white-light">Categories
                </h5>
                <button class="bg-red-500 text-white px-2 py-1 rounded-md mr-2 cursor-pointer" @click="toggle">
                    <i class="fas fa-plus"></i> Add Data
                </button>
            </div>
            <table id="myTable" class="whitespace-nowrap table-hover"></table>
        </div>

    </div>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("categories", (initialOpenState = false) => ({
                datatable: null,
                no: 1,
                open: initialOpenState,

                init() {
                    this.fetchData();
                },

                toggle() {
                    const modalTitle = document.querySelector('.title');
                    modalTitle.innerText = 'Add Data';
                    this.open = !this.open;
                },

                async fetchData() {
                    fetch('/api/categories')
                        .then((response) => response.json())
                        .then(data => {
                            this.no = 1;
                            const formattedData = data.map(category => {
                                console.info(category)
                                return [
                                    this.renderNumber(),
                                    category.brand.name,
                                    category.name,
                                    this.renderActions(category.id),
                                ];
                            });

                            this.datatable = new simpleDatatables.DataTable('#myTable', {
                                data: {
                                    headings: ["No.", "Brand", "name", "Action"],
                                    data: formattedData,
                                },
                                sortable: true,
                                searchable: true,
                                perPage: 10,
                                firstLast: false,
                                fixedColumns: false,
                                firstText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                lastText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                prevText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                nextText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                                labels: {
                                    perPage: "{select}"
                                },
                                layout: {
                                    top: "{search}",
                                    bottom: "{info}{select}{pager}",
                                },
                            });
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        })
                },

                async saveData() {
                    const form = document.querySelector('form');
                    const title = document.querySelector('.title');

                    event.preventDefault();
                    const formData = new FormData(form);

                    try {
                        if (title.innerHTML === 'Add Data') {
                            const response = await fetch(form.getAttribute('action'), {
                                method: form.getAttribute('method'),
                                body: formData,
                            });

                            if (response.ok) {
                                const data = await response.json();
                                this.showMessage("success", data.message);
                                this.rebuildDataTable()
                                form.reset();
                                this.open = false
                            }

                        } else {
                            const id = form.querySelector('#id').value;
                            const brand_id = form.querySelector('#brand').value;
                            const name = form.querySelector('#name').value;

                            const response = await fetch(`/api/categories/${id}`, {
                                method: 'PUT',
                                body: JSON.stringify({
                                    brand_id, name
                                }),
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            });

                            if (response.ok) {
                                const data = await response.json();
                                this.showMessage("success", data.message);
                                this.rebuildDataTable();
                                form.reset();
                                this.open = false;
                            }
                        }
                    } catch (error) {
                        console.error(error);
                    }
                },

                async handleEdit(id) {
                    const response = await fetch(`/api/categories/${id}`);
                    if (response.ok) {
                        const data = await response.json();
                        const idInput = document.querySelector('input[name="id"]');
                        const brandInput = document.querySelector('select[name="brand_id"]');
                        const nameInput = document.querySelector('input[name="name"]');
                        idInput.value = data.id;
                        brandInput.value = data.brand.id;
                        nameInput.value = data.name;
                        const modalTitle = document.querySelector('.title');
                        modalTitle.innerText = 'Edit Data';
                    }
                    this.open = true;
                },

                async handleDelete(id) {
                    const swalWithBootstrapButtons = window.Swal.mixin({
                        customClass: {
                            popup: 'sweet-alerts',
                            confirmButton: 'btn btn-secondary',
                            cancelButton: 'btn btn-dark ltr:mr-3 rtl:ml-3',
                        },
                        buttonsStyling: false,
                    });
                    swalWithBootstrapButtons
                        .fire({
                            title: 'Are you sure?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'No',
                            reverseButtons: true,
                            padding: '2em',
                        })
                        .then(async (result) => {
                            if (result.value) {
                                const res = await fetch(`/api/categories/${id}`, {
                                    method: 'DELETE',
                                })
                                if (res) {
                                    swalWithBootstrapButtons.fire('Deleted!', 'Your data has been deleted.', 'success');
                                    this.rebuildDataTable()
                                }
                            } else if (result.dismiss === window.Swal.DismissReason.cancel) {
                                swalWithBootstrapButtons.fire('Cancelled', 'Your data is safe :)', 'error');
                            }
                        });
                },

                renderNumber() {
                    return `<p>${this.no++}</p>`;
                },

                renderActions(id) {
                    return `
                        <div>
                            <button x-on:click="handleEdit(${id})" class="bg-red-500 text-white px-2 py-1 rounded-md mr-2">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button x-on:click="handleDelete(${id})" class="bg-blue-500 text-white px-2 py-1 rounded-md">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    `;
                },

                rebuildDataTable() {
                    // Hapus datatable yang ada
                    const dataTableElement = document.getElementById("myTable");
                    if (dataTableElement) {
                        dataTableElement.parentElement.removeChild(dataTableElement);
                    }

                    // Hapus elemen-elemen lain yang tidak diinginkan
                    const unwantedElements = document.querySelector(".dataTable-wrapper");
                    if (unwantedElements) {
                        unwantedElements.parentElement.removeChild(unwantedElements);
                    }

                    // Buat elemen tabel baru
                    const newTableElement = document.createElement("table");
                    newTableElement.id = "myTable";
                    newTableElement.classList.add("whitespace-nowrap", "table-hover", "table-striped", "new");

                    // Tambahkan tabel baru ke dalam elemen yang sesuai
                    const tableContainer = document.querySelector("#content-panel");
                    tableContainer.appendChild(newTableElement);

                    this.fetchData()
                },

                showMessage(type = "success", message) {
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
                }
            }));
        });
    </script>


</x-layout.default>