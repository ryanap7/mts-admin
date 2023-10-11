<x-layout.default>

    <div x-data="form">
        <div class="pt-5 grid grid-cols-1 lg:grid-cols-1 gap-6">
            <!-- form controls -->
            <div class="panel lg:row-span-1">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Portofolio</h5>
                </div>
                <div>
                    <form class="flex">
                        <div class="w-1/2 p-4 items-start">
                            <div class="mb-5">
                                <label for="ctnEmail">Email address</label>
                                <input id="ctnEmail" type="email" placeholder="name@example.com" class="form-input"
                                    required />
                            </div>
                            <div class="mb-5">
                                <label for="ctnEmail">Email address</label>
                                <input id="ctnEmail" type="email" placeholder="name@example.com" class="form-input"
                                    required />
                            </div>
                            <div>
                                <label for="ctnEmail">Email address</label>
                                <input id="ctnEmail" type="email" placeholder="name@example.com" class="form-input"
                                    required />
                            </div>
                        </div>
                        <div class="w-1/2 p-4">
                            <div class="mb-5">
                                <label for="ctnEmail">Email address</label>
                                <input id="ctnEmail" type="email" placeholder="name@example.com" class="form-input"
                                    required />
                            </div>
                            <div class="mb-5">
                                <label for="ctnSelect1">Example select</label>
                                <select id="ctnSelect1" class="form-select text-white-dark" required>
                                    <option>Open this select menu</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="ctnTextarea">Example textarea</label>
                                <textarea id="ctnTextarea" rows="3" class="form-textarea" placeholder="Enter Address" required></textarea>
                            </div>
                            <div class="mb-5">
                                <label for="ctnFile">Example file input</label>
                                <input id="ctnFile" type="file"
                                    class="form-input file:py-2 file:px-4 file:border-0 file:font-semibold p-0 file:bg-primary/90 ltr:file:mr-5 rtl:file-ml-5 file:text-white file:hover:bg-primary"
                                    required />
                            </div>
                            <button type="submit" class="btn btn-primary !mt-6">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- start hightlight js -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/highlight.min.css') }}">
    <script src="/assets/js/highlight.min.js"></script>
    <!-- end hightlight js -->

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("form", () => ({

                // highlightjs
                codeArr: [],
                toggleCode(name) {
                    if (this.codeArr.includes(name)) {
                        this.codeArr = this.codeArr.filter((d) => d != name);
                    } else {
                        this.codeArr.push(name);

                        setTimeout(() => {
                            document.querySelectorAll('pre.code').forEach(el => {
                                hljs.highlightElement(el);
                            });
                        });
                    }
                }
            }));
        });
    </script>
    <style>
        /* range picker */
        input[type=range] {
            -webkit-appearance: none;
        }

        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 8px;
            background: #dee2e6;
            border: none;
            border-radius: 3px;
        }

        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: none;
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background: #4361ee;
            margin-top: -4px;
        }

        .dark input[type=range]::-webkit-slider-runnable-track {
            background: #1b2e4b;
        }

        .dark input[type=range] {
            background-color: transparent;
        }

        input[type=range]:focus {
            outline: none;
        }

        input[type=range]:active::-webkit-slider-thumb {
            background: #4361eec2;
            cursor: pointer;
        }
    </style>
</x-layout.default>
