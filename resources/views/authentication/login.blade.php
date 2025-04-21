<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head/>

<body>
    <section class="auth bg-base d-flex flex-wrap">
        <!-- Left Section (Login Form) - Overlayed on Image -->
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center position-relative" style="z-index: 1;">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <img src="{{ asset('assets/images/MidoriFarm_long.png') }}" alt="logo" class="mb-40 max-w-290-px">
                    <h4 class="mb-12">Masuk Ke Akun Anda</h4>
                        @if ($logout = Session::get('logout'))
                            <div class="text-danger">
                                {{ $logout }}
                            </div>
                        @endif
                    <marquee class="mb-32 text-secondary-light text-lg">Selamat Datang Kembali!</marquee>
                </div>
                <form action="{{route('loginPost')}}" method="POST">
                    @csrf
                    @if ($message = Session::get('error'))
                        <div class="text-danger text-sm mb-2">
                            {{ $message }}
                        </div>
                    @endif
                    @if ($errors->all())
                    <div class="text-danger text-sm mb-2">
                        {{ $errors->first() }}
                    </div>
                    @endif
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" class="form-control h-56-px bg-neutral-50 radius-12" name="email" placeholder="Email" value="{{ old('email') }}" autocomplete="email">
                    </div>
                    @if ($errors->all())
                    <div class="text-danger text-sm mb-2">
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                    <div class="position-relative mb-20">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control h-56-px bg-neutral-50 radius-12" id="password" placeholder="Kata Sandi" autocomplete="current-password">
                        </div>
                        <button type="button" class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" id="togglePassword"></button>
                    </div>
                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input border border-neutral-300" type="checkbox" value="1" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Ingat Saya</label>
                            </div>
                            <a href="javascript:void(0)" class="text-secondary-600 fw-medium" id="forgotPass">Lupa kata sandi?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary-500 text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">Masuk</button>
                </form>
            </div>
        </div>
        <!-- Right Section (Image) - Moved to the Right -->
        <div class="auth-left d-lg-block d-none position-relative overflow-hidden">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center position-relative w-100">
                <img src="{{ asset('assets/images/auth/login_img.webp') }}" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover;" alt="">
            </div>
        </div>
    </section>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            this.classList.toggle('ri-eye-line');
            this.classList.toggle('ri-eye-off-line');
            if (password.type === 'password') {
                password.type = 'text';
            } else {
                password.type = 'password';
            }
        });

        document.getElementById('forgotPass').addEventListener('mouseenter', function() {
            this.style.color = '#66BAFF'
        });
        document.getElementById('forgotPass').addEventListener('mouseleave', function() {
            this.style.color = ''
        });
    </script>
    <x-script />
</body>

</html>