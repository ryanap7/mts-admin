<x-layout.auth>

    <div class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center">
        <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
            <h2 class="font-bold text-2xl mb-3">Sign In</h2>
            <p class="mb-7">Enter your email and password to login</p>
            @if(session('error'))
            <div class="relative flex items-center border p-3.5 rounded before:inline-block before:absolute before:top-1/2 ltr:before:right-0 rtl:before:left-0 rtl:before:rotate-180 before:-mt-2 before:border-r-8 before:border-t-8 before:border-b-8 before:border-t-transparent before:border-b-transparent before:border-r-inherit text-danger bg-danger-light border-danger ltr:border-r-[64px] rtl:border-l-[64px] dark:bg-danger-dark-light">
                <span class="absolute ltr:-right-11 rtl:-left-11 inset-y-0 text-white w-6 h-6 m-auto">
                    <img src="/assets/icons/IcDanger.svg" />
                </span>
                <span class="ltr:pr-2 rtl:pl-2">{{ session('error') }}</span>
            </div>
            @endif
            <form class="space-y-5" action="{{ route('auth') }}" method="POST">
                @CSRF
                <div>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-input" placeholder="Enter Email" />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="form-input" placeholder="Enter Password" />
                </div>
                <button type="submit" class="btn btn-primary w-full">SIGN IN</button>
            </form>
        </div>
    </div>

</x-layout.auth>