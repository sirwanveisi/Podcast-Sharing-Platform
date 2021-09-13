@extends('layouts.app')
@section('title', 'ورود به حساب کاربری')
@section('content')
    <div class="limiter rtl">
        <div class="container-login100" style="background-color: #5999d2 !important;">
            <div class="wrap-login100">
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        <span class="login100-form-title p-b-45">
						{{ __('auth.Login') }}
					</span>
                        @csrf
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   oninvalid="this.setCustomValidity('ایمیل کاربری خود را وارد کنید')"
                                   oninput="setCustomValidity('')">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('auth.E-Mail') }}</span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="رمز عبور مورد نیاز است">
                            <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                   oninvalid="this.setCustomValidity('رمز عبور خود را وارد کنید')"
                                   oninput="setCustomValidity('')">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="label-input100">{{ __('auth.Password') }}</span>
                        </div>

                        <div class="flex-sb-m w-full p-t-15 p-b-20">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('auth.Remember Me') }}
                                    <span class="form-check-sign">
									<span class="check"></span>
								</span>
                                </label>
                            </div>

                            <div>
                                @if (Route::has('password.request'))
                                <a href="{{--{{ route('password.request') }}--}}" class="txt1">
                                    {{ __('auth.Forget Password') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                {{ __('auth.Login Btn') }}
                            </button>
                        </div>

                        <div class="text-center p-t-45 p-b-20">
						<span class="txt2">
							حساب کاربری ندارید؟ <a href="{{ route('register') }}">ثبت نام</a>
						</span>
                        </div>
                    </form>
                <div class="login100-more" style="background-image: url('/admin/images/pages/login-bg.jpg');">
                </div>
                </div>
            </div>
        </div>
@endsection
