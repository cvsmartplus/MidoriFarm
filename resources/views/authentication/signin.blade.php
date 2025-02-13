<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head/>

<body>
    <section class="auth bg-base d-flex flex-wrap">
        <!-- Left Section (Login Form) - Overlayed on Image -->
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center position-relative" style="z-index: 1;">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <a href="{{ route('index') }}" class="mb-40 max-w-290-px">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                    <h4 class="mb-12">Masuk Ke Akun Anda</h4>
                    <p class="mb-32 text-secondary-light text-lg">Selamat Datang Kembali!</p>
                </div>
                <form action="signin" method="POST">
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Email">
                    </div>
                    <div class="position-relative mb-20">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input type="password" class="form-control h-56-px bg-neutral-50 radius-12" id="your-password" placeholder="Kata Sandi">
                        </div>
                        <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                    </div>
                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input border border-neutral-300" type="checkbox" value="" id="remember">
                                <label class="form-check-label" for="remember">Ingat Saya</label>
                            </div>
                            <a href="javascript:void(0)" class="text-primary-600 fw-medium">Lupa kata sandi?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">Masuk</button>
                </form>
            </div>
        </div>
        <!-- Right Section (Image) - Moved to the Right -->
        <div class="auth-left d-lg-block d-none position-relative overflow-hidden">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center position-relative w-100">
                <img src="{{ asset('assets/images/sign-in/bapak_kentang.jpg') }}" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover;" alt="">
            </div>
        </div>
    </section>

    @php
        $script = '<script>
            // ================== Password Show Hide Js Start ==========
            function initializePasswordToggle(toggleSelector) {
                $(toggleSelector).on("click", function() {
                    $(this).toggleClass("ri-eye-off-line");
                    var input = $($(this).attr("data-toggle"));
                    if (input.attr("type") === "password") {
                        input.attr("type", "text");
                    } else {
                        input.attr("type", "password");
                    }
                });
            }
            // Call the function
            initializePasswordToggle(".toggle-password");
            // ========================= Password Show Hide Js End ===========================
        </script>';
    @endphp

    <x-script />
</body>

</html>
